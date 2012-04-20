<?php

/**
 * Singleton for PDO
 *
 * @author Seyfer
 */

abstract class M_PdoDB {  
    
    static private $db_host = "";
    static private $db_user = "";
    static private $db_passw = "";
    static private $db_name = "";
    static private $db_charset = "";

    static private $pdo_instance = null;

    //static ?
    static public function getPdoInstance() {

        include $_SERVER['DOCUMENT_ROOT'] . "/config/db_conf.php";
        
        self::$db_host = $db_host;
        self::$db_name = $db_name;
        self::$db_passw = $db_passw;
        self::$db_user = $db_user;
        self::$db_charset = $db_charset;

        $connect = "mysql:host=" . self::$db_host . ";dbname=" . self::$db_name . "";

        if (!self::$pdo_instance) {
            //создаем экземпляр и сразу задаем кодировку
            self::$pdo_instance = new PDO($connect, self::$db_user, self::$db_passw,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . self::$db_charset));            
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
    
    //ф-я возвращает последний всталенный ИД
    static public function getLastId () {
        $p_inst = self::getPdoInstance();
        return $p_inst->lastInsertId();
    }
}

?>
