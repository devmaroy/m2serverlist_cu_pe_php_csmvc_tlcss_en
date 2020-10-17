<?php

use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;

// Configuration file
$config = require_once( 'config.php' );
App::bind( 'config', $config );

// Database
try {
	$databaseConfig = App::get( 'config' )[ 'database' ];
} catch ( Exception $e ) {
	die( $e->getMessage() );
}

App::bind( 'database', new QueryBuilder(
	Connection::make( $databaseConfig )
));
