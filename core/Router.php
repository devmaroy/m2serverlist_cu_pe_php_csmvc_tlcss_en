<?php

namespace App\Core;

class Router
{
	/**
	 * All registered routes.
	 *
	 * @var array
	 */
	public $routes = [
		'GET'  => [],
		'POST' => []
	];

	/**
	 * Register a GET route.
	 *
	 * @param string $uri
	 * @param string $controller
	 */
	public function get( $uri, $controller )
	{
		$this->routes[ 'GET' ][ $uri ] = $controller;
	}

	/**
	 * Register a POST route.
	 *
	 * @param string $uri
	 * @param string $controller
	 */
	public function post( $uri, $controller ) {
		$this->routes[ 'POST' ][ $uri ] = $controller;
	}

	/**
	 * Load a user's routes file.
	 *
	 * @param string $file
	 *
	 * @return Router $router
	 */
	public static function load( $file ) {
		$router = new static;

		require $file;

		return $router;
	}

	/**
	 * Load the requested URI's associated controller method.
	 *
	 * @param string $uri
	 * @param string $requestType
	 *
	 * @return mixed
	 */
	public function direct( $uri, $requestType ) {
		// Check if route exists by checking uri ('/') and request type ('GET')

		if ( ! array_key_exists( $uri, $this->routes[ $requestType ] ) ) {
			// Route doesn't exist
			throw new Exception( 'No route defined for this URL.' );
		}

		// Route exists

		// Call controller's method
		return $this->callAction( ...explode( '@', $this->routes[ $requestType ][ $uri ] ) );
	}


	/**
	 * Load and call the relevant controller action.
	 *
	 * @param string $controller
	 * @param string $action
	 *
	 * @return mixed
	 */
	public function callAction( $controller, $action ) {
		$controller = "App\\Controllers\\{$controller}";
		$controller = new $controller;

		// Check if method really exists on controller
		if ( ! method_exists( $controller, $action ) ) {
			// Method doesn't exists
			throw new Exception( "{$controller} doesn't respond to the {$action} action." );
		}

		// Method exists on controller so we can call it
		return $controller->$action();
	}
}
