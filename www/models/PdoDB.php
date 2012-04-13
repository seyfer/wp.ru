<?php

/**
 * Singleton for PDO
 *
 * @author Seyfer
 */
class PdoDB {
    
    static private $db_host = "";
    static private $db_user = "";
    static private $db_passw = "";
    static private $db_name = "";

    static private $pdo_instance = null;

    //static ?
    static public function getPdoInstance() {

        include $_SERVER['DOCUMENT_ROOT'] . "/config/db_conf.php";
        
        self::$db_host = $db_host;
        self::$db_name = $db_name;
        self::$db_passw = $db_passw;
        self::$db_user = $db_user;

        $connect = "mysql:host=" . self::$db_host . ";dbname=" . self::$db_name . "";

        if (!self::$pdo_instance) {
            //создаем экземпляр и сразу задаем кодировку
            self::$pdo_instance = new PDO($connect, self::$db_user, self::$db_passw);
            self::$pdo_instance->exec("SET CHARACTER SET utf8");
            self::$pdo_instance->exec("SET NAMES utf8");
        }

        return self::$pdo_instance;
    }

    static public function query($sql) {

        $p_inst = self::getPdoInstance();
        if ($stmt = $p_inst->query($sql)) {
            //возвращаем стейтмент
            return $stmt;
        } else {
            $pdo_err = $p_inst->errorInfo();
            throw new PDOException($pdo_err[2]);
        }
    }

    static public function exec($sql) {

        $p_inst = self::getPdoInstance();
        $row_aff_cnt = $p_inst->exec($sql);

        //вдруг ошибка
        $pdo_err = $p_inst->errorInfo();
        if ($pdo_err[2]) {
            throw new PDOException($pdo_err[2]);
        } else {
            //кол-во изменененных строк
            return $row_aff_cnt;
        }
    }

    static public function prepare($sql) {
        $p_inst = self::getPdoInstance();
        if ($stmt = $p_inst->prepare($sql)) {
            //возвращаем стейтмент
            return $stmt;
        } else {
            $pdo_err = $p_inst->errorInfo();
            throw new PDOException($pdo_err[2]);
        }
    }

}

?>
