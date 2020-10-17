<?php

// Define routes
$router->get( '', 'PagesController@home' );
$router->get( 'about', 'PagesController@about' );
$router->get( 'add-server', 'PagesController@addServer' );
$router->post( 'add-server', 'PagesController@store' );
