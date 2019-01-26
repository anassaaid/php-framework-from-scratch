<?php
namespace Core;

use PDO;

abstract class Model{

	protected static function getDb(){
		static $db = null;
		if($db === null){
			$host = 'localhost';
            $dbname = 'php_framework_from_scratch';
            $username = 'root';
            $password = '';
    
            try {
                $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                              $username, $password);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
		}
		return $db;
	}

}