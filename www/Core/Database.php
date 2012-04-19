<?php

//
// Помощник работы с БД
//
require_once '/model/M_PdoDB.php';

class Database {

//
// Выборка строк
// $query    	- полный текст SQL запроса
// $param           - параметры запроса
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
            $stmt->execute();

            $result_rows = array();
            while ($row = $stmt->fetch()) {
                $result_rows[] = $row;
            }

            return $result_rows;
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

                $query = "INSERdT INTO $table ($columns_s) VALUES ($values_s)";                
                $stmt = M_PdoDB::prepare($query);

                foreach ($object as $k => $v) {                   
                    $stmt->bindParam(":" . $k, $v);
                }

                if ($stmt->execute()) {

                    return true;
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
// $where		- условие (часть SQL запроса)
// результат	- число измененных строк
//	
    public function Update($table, $object, $where) {
        $sets = array();

        foreach ($object as $key => $value) {
            $key = mysql_real_escape_string($key . '');

            if ($value === null) {
                $sets[] = "$key=NULL";
            } else {
                $value = mysql_real_escape_string($value . '');
                $sets[] = "$key='$value'";
            }
        }

        $sets_s = implode(',', $sets);
        $query = "UPDATE $table SET $sets_s WHERE $where";
        $result = mysql_query($query);

        if (!$result)
            die(mysql_error());

        return mysql_affected_rows();
    }

//
// Удаление строк
// $table 		- имя таблицы
// $where		- условие (часть SQL запроса)	
// результат	- число удаленных строк
//		
    public function Delete($table, $where) {
        $query = "DELETE FROM $table WHERE $where";
        $result = mysql_query($query);

        if (!$result)
            die(mysql_error());

        return mysql_affected_rows();
    }

}
