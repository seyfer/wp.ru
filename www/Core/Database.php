<?php

//
// Помощник работы с БД
//
require_once 'Core/M_PdoDB.php';

class Database {

    public $tbl_prefix;
    static private $instance = "";

    function __construct() {

        $this->tbl_prefix = M_PdoDB::getTblPrefix();
    }

    public static function getInstance() {
        if (self::$instance == null)
            self::$instance = new Database();

        return self::$instance;
    }

//
// Выборка строк
// $query    	- полный текст SQL запроса
// $param       - параметры запроса
// результат	- массив выбранных объектов
//
    public function Select($query, $param = array()) {

        try {

            $stmt = M_PdoDB::prepare($query);

            if ($param) {
                foreach ($param as $k => &$v) {
                    $stmt->bindParam(":" . $k, $v);
                }
            }

            if ($stmt->execute()) {

                $result_rows = array();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $result_rows[] = $row;
                }

                return $result_rows;
            } else {
                $err = $stmt->errorInfo();
                throw new PDOException($err[2]);
            }
        } catch (PDOException $e) {
            echo $e;

            return false;
        }
    }

//
// Вставка строки
// $table 		- имя таблицы
// $object 		- ассоциативный массив с парами вида "имя столбца - значение"
// результат	- true false
//
    public function Insert($table, $object) {

        $columns = array();
        $values = array();

        if ($object)
            try {

                foreach ($object as $key => $value) {
                    $columns[] = $key;

                    if ($value === null) {
                        $values[] = 'NULL';
                    } else {
                        $values[] = ":$key";
                    }
                }

                $columns_s = implode(',', $columns);
                $values_s = implode(',', $values);

                $query = "INSERT INTO $table ($columns_s) VALUES ($values_s)";

                $stmt = M_PdoDB::prepare($query);

                foreach ($object as $k => &$v) {
                    $stmt->bindParam(":$k", $v);
                }

                if ($stmt->execute()) {
                    return M_PdoDB::getLastId();
                } else {
                    $err = $stmt->errorInfo();
                    throw new PDOException($err[2]);
                }
            } catch (PDOException $e) {
                echo $e;
                return false;
            }
    }

//
// Изменение строк
// $table 		- имя таблицы
// $object 		- ассоциативный массив с парами вида "имя столбца - значение"
// $where		- условие массив "условие => значение"
// результат            - число измененных строк
//
    public function Update($table, $object, $where) {
        $sets = array();
        $wheres = array();

        try {

            //$i=0; могло бы быть, но параметры и так разные
            foreach ($object as $key => $value) {

                if ($value === null) {
                    $sets[] = "$key = NULL";
                } else {

                    $sets[] = "$key = :$key";
                }
            }

            $wi = 0;
            foreach ($where as $k => $v) {

                $wheres[$wi] = $k;
                //если больше 1 параметра делаем AND
                if (++$wi > 1) {
                    $wheres[$wi - 2] .= " AND ";
                }
            }

            $sets_s = implode(',', $sets);
            $where_s = implode(' ', $wheres);

            $query = "UPDATE $table SET $sets_s WHERE $where_s";
            //var_dump($query);

            $stmt = M_PdoDB::prepare($query);


            foreach ($object as $k => &$v) {

                $stmt->bindParam(":$k", $v);
            }
            foreach ($where as $k => &$v) {
                preg_match("/(:[a-zA-Z_]*)/i", $k, $key);

                //без параметра не редактируем
                if ($key[0] == null)
                    return false;

                $stmt->bindParam($key[0], $v);
            }

            if (!$stmt->execute()) {
                $err = $stmt->errorInfo();
                throw new PDOException($err[2]);
            } else {
                return $stmt->rowCount();
            }
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

//
// Удаление строк
// $table 		- имя таблицы
// $where		- условие (часть SQL запроса)
// результат	- число удаленных строк
//
    public function Delete($table, $where) {
        $wheres = array();

        try {

            $wi = 0;
            foreach ($where as $k => $v) {
                $wheres[$wi] = $k;
                //если больше 1 параметра делаем AND
                if (++$wi > 1) {
                    $wheres[$wi - 2] .= " AND ";
                }
            }

            $where_s = implode(' ', $wheres);

            $query = "DELETE FROM $table WHERE $where_s";

            $stmt = M_PdoDB::prepare($query);

            foreach ($where as $k => $v) {
                preg_match("/(:[a-zA-Z_]*)/i", $k, $key);

                //без параметра не удаляем
                if ($key[0] == null)
                    return false;

                $stmt->bindParam($key[0], $v);
            }

            if (!$stmt->execute()) {
                $err = $stmt->errorInfo();
                throw new PDOException($err[2]);
            } else {
                return true;
            }

            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

}
