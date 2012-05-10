<?php

/*
 * users can register
 */

require_once '/control/C_Base.php';

class C_User_Reg extends C_Base {

    private $login;
    private $name;
    private $email;

    function __construct() {
        parent::__construct();
    }

    function OnInput() {
        parent::OnInput();

        //пользователю тут нечего делать
        if ($this->user !== null) { {
                header("Location: ?c=C_User_Auth");
                die();
            }
        }

        if ($this->IsPost()) {
            if ($_POST['reg_user']) {

                $this->login = $_POST['login'];
                $this->name = $_POST['name'];
                $this->email = $_POST['email'];

                if ($_POST['login'] !== '' && $_POST['password'] !== '' && $_POST['email']) {
                    $user = M_Users::getInstance();

                    if ($user->add($this->login, $_POST['password'], $this->name, $this->email)) {
                        $this->message = "Успешная регистрация. Теперь вы можете войти.";
                        header("Location: ?c=C_User_Auth");
                        exit();
                    } else {
                        $this->message = "Регистрация не удалась. Попробуйте позже!";
                    }
                } else {
                    $this->message = "Вы ввели не все обязательные данные";
                }
            }
        }
    }

    function OnOutput() {
        $smarty = M_Smarty::getInstance();

        $this->tpl_path .= $this->user_tpl_path;
        $smarty->cache_id = $smarty->get_cache_id($this->login . $this->name . $this->email);

        $vars = array(
            'login' => $this->login,
            'name' => $this->name,
            'email' => $this->email
        );

        $smarty->assign($vars);

        $this->content = $smarty->fetch($this->tpl_path . 'V_User_Reg.tpl', $smarty->cache_id);

        parent::OnOutput();
    }

}

?>
