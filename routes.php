<?php

require_once "./classes/Route.class.php";


$path = str_replace("/". APP_NAME. "/", '', $_SERVER['REQUEST_URI']);

$routes = array(
	'' => 'Index',
	'index' => 'Index',
	'test' => 'Test',

);

if (!empty($routes[$path])) {
	Route::get($routes[$path]);
}

?>