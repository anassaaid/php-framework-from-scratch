<?php
namespace App\Controllers;

class Home extends \Core\Controller{

	/**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        echo "(before) ";
        //do some code;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        echo " (after)";
        //do some code;
    }

	public function indexAction(){
		echo "Hello from the index action of the Home controller";
	}

	public function editAction(){
		echo "Hello from the edit action of the Home controller";	
		echo "<p>Route parameters : <pre>" . htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
	}

}