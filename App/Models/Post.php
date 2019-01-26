<?php
namespace App\Models;

use PDO;

class Post extends \Core\Model {

	public static function getAll(){
		try{
			$db = static::getDb();

			$stm = $db->query('select * from posts');
			$results = $stm->fetchAll(PDO::FETCH_ASSOC);

			return $results;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

}