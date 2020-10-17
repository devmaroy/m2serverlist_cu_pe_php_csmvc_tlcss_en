<?php

namespace App\Core;

// Dependency Injection Container
// so we can store items using a class and not a collection like array

class App {
	/**
	 * All registered keys - items will be stored here.
	 *
	 * @var array
	 */
	protected static $registry = [];

	/**
	 * Bind a new key and value into the registry(container).
	 *
	 * @param string $key
	 * @param mixed $value
	 */
	public static function bind( $key, $value )
	{
		// Save value to the registry(container)
		static::$registry[$key] = $value;
	}


	public static function get( $key )
	{
		// Check if key exists
		if ( ! array_key_exists( $key, static::$registry ) ) {
			// Key doesn't exist so throw an exception
			throw new Exception( "No key {$key} is bound in the container." );
		}

		// Key exists

		// Return the value from the registry(container)
		return static::$registry[$key];
	}
}
