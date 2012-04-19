<?php

//
// Помощник работы с БД
//
require_once '/model/M_PdoDB.php';

class Database {

    //
    // Выборка строк
    // $query    	- полный текст SQL запроса
    // результат	- массив выбранных объектов
    //
	public function Select($query) {
            
        try {            

            $stmt = M_PdoDB::query($query);

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
    // результат	- идентификатор новой строки
    //
	public function Insert($table, $object) {
        $columns = array();
        $values = array();

        foreach ($object as $key => $value) {
            $key = mysql_real_escape_string($key . '');
            $columns[] = $key;

            if ($value === null) {
                $values[] = 'NULL';
            } else {
                $value = mysql_real_escape_string($value . '');
                $values[] = "'$value'";
            }
        }

        $columns_s = implode(',', $columns);
        $values_s = implode(',', $values);

        $query = "INSERT INTO $table ($columns_s) VALUES ($values_s)";
        $result = mysql_query($query);

        if (!$result)
            die(mysql_error());

        return mysql_insert_id();
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
