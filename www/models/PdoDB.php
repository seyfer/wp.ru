<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PdoDB
 *
 * @author Admin
 */
class PdoDB {
    
    static private $pdo_instance = null;      
    
    public function getPdoInstance () {
        
        global $db_host;
        global $db_user;
        global $db_passw;
        global $db_name;
        
        $connect = "mysql:host=" . $db_host . ";dbname=" . $db_name . ""; 
        
        if (!self::$pdo_instance) {
            //создаем экземпляр и сразу задаем кодировку
            self::$pdo_instance = new PDO ($connect, $db_user, $db_passw );
            self::$pdo_instance->exec("SET CHARACTER SET utf8");
            self::$pdo_instance->exec("SET NAMES utf8");
            
        }
        
        return self::$pdo_instance;    
    }
    
    static public function query ($sql) {
        
        $p_inst = self::getPdoInstance();
        if ($stmt = $p_inst->query($sql))
        {
            //возвращаем стейтмент
            return $stmt;
        }
        else {
            $pdo_err = $p_inst->errorInfo();
            throw new PDOException($pdo_err[2]);
        }
    }
    
    static public function exec ($sql) {
        
        $p_inst = self::getPdoInstance();
        $row_aff_cnt = $p_inst->exec($sql);
        
        //вдруг ошибка
        $pdo_err = $p_inst->errorInfo();
        if ($pdo_err[2])
        {            
            throw new PDOException($pdo_err[2]);
        }
        else
        {   
            //кол-во изменененных строк
            return $row_aff_cnt;
        }
    }
    
    static public function prepare ($sql) {
        $p_inst = self::getPdoInstance();
        if ($stmt = $p_inst->prepare($sql))
        {
            //возвращаем стейтмент
            return $stmt;
        }
        else {
            $pdo_err = $p_inst->errorInfo();
            throw new PDOException($pdo_err[2]);
        }
    }
}

?>
