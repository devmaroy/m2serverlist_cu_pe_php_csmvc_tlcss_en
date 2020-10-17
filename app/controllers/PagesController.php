<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
	/**
	 * Show the home page.
	 */
	public function home() {
		// Get all servers from DB
		$servers = App::get( 'database' )->selectAll( 'servers' );

		// Show index view and pass the servers
		return view( 'index', [ 'servers' => $servers ] );
	}

	/**
	 * Show the about page.
	 */
	public function about() {
		// Show about view
		return view( 'about' );
	}

	/**
	 * Show the add server page.
	 */
	public function addServer() {
		// Show add server view
		return view( 'add-server' );
	}

	/**
	 * Store a new server in the database.
	 */
	public function store() {
		// Prepare server data
		$serverData = [
			'server_name' => $_POST[ 'server_name' ],
			'server_website' => $_POST[ 'server_website' ],
			'server_description' => $_POST[ 'server_description' ],
			'server_vip' => $_POST[ 'server_vip' ],
		];

		// Validate server data
		$errors = $this->validate( $serverData );

		// Check if we have some errors
		if ( $errors ) {
			// We have errors - return back with errors provided
			return view( 'add-server', [ 'fields' => $serverData, 'errors' => $errors] );
		}

		// Insert new server into the database
		App::get( 'database' )->insert( 'servers', [
			'name' => $serverData[ 'server_name' ],
			'description' => $serverData[ 'server_description' ],
			'website' => $serverData[ 'server_website' ],
			'vip' => $serverData[ 'server_vip' ],
		]);

		// Redirect to the homepage
		return redirect('');
	}

	/**
	 * Validate fields.
	 *
	 * @param array $fields
	 *
	 * @return array $errors
	 */
	private function validate ( $fields ) {
		$errors = [];

		// Check if we have server name
		if ( ! $fields[ 'server_name' ] ) {
			$errors[ 'server_name_error' ] = 'Please provide name for the server.';
		}

		// Check if we have server website and if it is a valid one
		if ( ! $fields[ 'server_website' ]  ) {
			$errors[ 'server_website_error' ] = 'Please provide website for the server.';
		} else if ( ! filter_var( $fields[ 'server_website' ], FILTER_VALIDATE_URL ) ) {
			$errors[ 'server_website_error' ] = 'Please provide valid website.';
		}

		// Check if we have server description
		if ( ! $fields[ 'server_description' ] ) {
			$errors[ 'server_description_error' ] = 'Please provide description for the server.';
		}

		// Check if we have server vip correct value
		if ( $fields[ 'server_vip' ] === false || $fields[ 'server_vip' ] === true ) {
			$errors[ 'server_description_error' ] = 'VIP field has a wrong value.';
		}

		return $errors;
	}
}
