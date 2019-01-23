<?php
namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller{

	/**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        // echo "(before) ";
        //do some code;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        // echo " (after)";
        //do some code;
    }

	public function indexAction(){
		View::render("Home/index.php");
	}

	public function editAction(){
		echo "Hello from the edit action of the Home controller";	
		echo "<p>Route parameters : <pre>" . htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
	}

}