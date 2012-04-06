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
            
            self::$pdo_instance = new PDO ($connect, $db_user, $db_passw );
            
        }
        
        return self::$pdo_instance;    
    }
    
    static public function query ($sql) {
        
        $p_inst = self::getPdoInstance();
        return $p_inst->query($sql);
    }
    
    static public function exec ($sql) {
        
        $p_inst = self::getPdoInstance();
        return $p_inst->exec($sql);
    }
}

?>
