<?php

/**
 * Router 
 */

class Router{
	protected $routes = [];

	public function add($route, $params){
		$this->routes[$route] = $params;
	}

	public function getRoutes($value=''){
		return $this->routes;
	}
}