<?php
namespace App\Models;

use PDO;

class Post{

	public static function getAll(){
		$host = 'localhost';
		$dbname = 'php_framework_from_scratch';
		$username = 'root';
		$password = '';

		try{
			$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

			$stm = $db->query('select * from posts');
			$results = $stm->fetchAll(PDO::FETCH_ASSOC);

			return $results;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

}