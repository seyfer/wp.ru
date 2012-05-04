<?php

require_once ('/core/Database.php');

//
// Менеджер пользователей
//
class M_Users {

    private static $instance;   // экземпляр класса
    private $DB;               // драйвер БД
    private $sid;               // идентификатор текущей сессии
    private $uid;               // идентификатор текущего пользователя
    private $table;
    private $tbl_with_prefix = "";

    // Получение экземпляра класса
    // результат	- экземпляр класса MSQL

    public static function getInstance() {
        if (self::$instance == null)
            self::$instance = new M_Users();

        return self::$instance;
    }

    //
    // Конструктор
    //
    public function __construct() {
        $this->DB = Database::getInstance();
        $this->sid = null;
        $this->uid = null;
    }

    //
    // Очистка неиспользуемых сессий
    //
    public function ClearSessions() {
        $this->table = "sessions";
        $this->tbl_with_prefix = $this->DB->tbl_prefix . $this->table;

        $min = date('Y-m-d H:i:s', time() - 60 * 20);

        $where = array(
            'time_last < :min' => $min
        );

        $this->DB->Delete($this->tbl_with_prefix, $where);
    }

    //
    // Авторизация
    // $login 		- логин
    // $password 	- пароль
    // $remember 	- нужно ли запомнить в куках
    // результат	- true или false
    //
	public function Login($login, $password, $remember = true) {
        // вытаскиваем пользователя из БД
        $user = $this->GetByLogin($login);

        if ($user == null)
            return false;

        $id_user = $user['id_user'];

        // проверяем пароль
        if ($user['password'] != md5($password))
            return false;

        // запоминаем имя и md5(пароль)
        if ($remember) {
            $expire = time() + 3600 * 24 * 100;
            setcookie('login', $login, $expire);
            setcookie('password', md5($password), $expire);
        }

        // открываем сессию и запоминаем SID
        $this->sid = $this->OpenSession($id_user);

        return true;
    }

    //
    // Выход
    //
	public function Logout() {
        setcookie('login', '', time() - 1);
        setcookie('password', '', time() - 1);
        unset($_COOKIE['login']);
        unset($_COOKIE['password']);
        unset($_SESSION['sid']);
        $this->sid = null;
        $this->uid = null;
    }

    //
    // Получение пользователя
    // $id_user		- если не указан, брать текущего
    // результат	- объект пользователя
    //
	public function Get($id_user = null) {

        // Если id_user не указан, берем его по текущей сессии.
        if ($id_user == null)
            $id_user = $this->GetUid();

        if ($id_user == null)
            return null;

        $this->table = "users";
        $this->tbl_with_prefix = $this->DB->tbl_prefix . $this->table;

        // А теперь просто возвращаем пользователя по id_user.
        $query = "SELECT * FROM $this->tbl_with_prefix WHERE id_user = :id_user";

        $object['id_user'] = $id_user;

        $result = $this->DB->Select($query, $object);
        return $result[0];
    }

    //
    // Получает пользователя по логину
    //
	public function GetByLogin($login) {
        $this->table = "users";
        $this->tbl_with_prefix = $this->DB->tbl_prefix . $this->table;

        $query = "SELECT * FROM $this->tbl_with_prefix
                WHERE login = :login";

        $object['login'] = $login;

        $result = $this->DB->Select($query, $object);
        return $result[0];
    }

    //
    // Проверка наличия привилегии
    // $priv 		- имя привилегии
    // $id_user		- если не указан, значит, для текущего
    // результат	- true или false
    //
	public function Can($priv, $id_user = null) {
        // СДЕЛАТЬ САМОСТОЯТЕЛЬНО
        return false;
    }

    //
    // Проверка активности пользователя
    // $id_user		- идентификатор
    // результат	- true если online
    //
	public function IsOnline($id_user) {
        // СДЕЛАТЬ САМОСТОЯТЕЛЬНО
        return false;
    }

    //
    // Получение id текущего пользователя
    // результат	- UID
    //
	public function GetUid() {

        // Проверка кеша.
        if ($this->uid != null)
            return $this->uid;

        // Берем по текущей сессии.
        $sid = $this->GetSid();

        if ($sid == null)
            return null;

        $this->table = "sessions";
        $this->tbl_with_prefix = $this->DB->tbl_prefix . $this->table;

        $query = "SELECT id_user FROM $this->tbl_with_prefix
                WHERE sid = :sid";
        $object['sid'] = $sid;
        $result = $this->DB->Select($query, $object);

        // Если сессию не нашли - значит пользователь не авторизован.
        if (count($result) == 0)
            return null;

        // Если нашли - запоминм ее.
        $this->uid = $result[0]['id_user'];
        return $this->uid;
    }

    //
    // Функция возвращает идентификатор текущей сессии
    // результат	- SID
    //
	private function GetSid() {

        // Проверка кеша.
        if ($this->sid != null)
            return $this->sid;

        // Ищем SID в сессии.
        $sid = $_SESSION['sid'];

        // Если нашли, попробуем обновить time_last в базе.
        // Заодно и проверим, есть ли сессия там.
        if ($sid != null) {
            $session = array();
            $session['time_last'] = date('Y-m-d H:i:s');

            $this->table = "sessions";
            $this->tbl_with_prefix = $this->DB->tbl_prefix . $this->table;

            $where["sid = :sid"] = $sid;
            $affected_rows = $this->DB->Update($this->tbl_with_prefix, $session, $where);

            if ($affected_rows == 0) {
                $query = "SELECT count(*) AS cnt FROM $this->tbl_with_prefix
                        WHERE sid = :sid";
                $object['sid'] = $sid;

                $result = $this->DB->Select($query, $object);

                if ($result[0]['cnt'] == 0)
                    $sid = null;
            }
        }

        // Нет сессии? Ищем логин и md5(пароль) в куках.
        // Т.е. пробуем переподключиться.
        if ($sid == null && isset($_COOKIE['login'])) {
            $user = $this->GetByLogin($_COOKIE['login']);

            if ($user != null && $user['password'] == $_COOKIE['password'])
                $sid = $this->OpenSession($user['id_user']);
        }

        // Запоминаем в кеш.
        if ($sid != null)
            $this->sid = $sid;

        // Возвращаем, наконец, SID.
        return $sid;
    }

    //
    // Открытие новой сессии
    // результат	- SID
    //
	private function OpenSession($id_user) {

        // генерируем SID
        $sid = $this->GenerateStr(10);

        // вставляем SID в БД
        $now = date('Y-m-d H:i:s');
        $session = array();
        $session['id_user'] = $id_user;
        $session['sid'] = $sid;
        $session['time_start'] = $now;
        $session['time_last'] = $now;

        $this->table = "sessions";
        $this->tbl_with_prefix = $this->DB->tbl_prefix . $this->table;

        $this->DB->Insert($this->tbl_with_prefix, $session);

        // регистрируем сессию в PHP сессии
        $_SESSION['sid'] = $sid;

        // возвращаем SID
        return $sid;
    }

    //
    // Генерация случайной последовательности
    // $length 		- ее длина
    // результат	- случайная строка
    //
	private function GenerateStr($length = 10) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
        $code = "";
        $clen = strlen($chars) - 1;

        while (strlen($code) < $length)
            $code .= $chars[mt_rand(0, $clen)];

        return $code;
    }

}
