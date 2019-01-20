<?php
namespace App\Controllers;

class Hom extends \Core\Controller{

	public function index(){
		echo "Hello from the index action of the Home controller";
	}

	public function edit(){
		echo "Hello from the edit action of the Home controller";	
		echo "<p>Route parameters : <pre>" . htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
	}

}