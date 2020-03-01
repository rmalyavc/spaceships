<?php

class Route {
	public static function get($route) {
		$controller = self::get_controller($route);
		$view = $controller->create_view();
		$view->display();
	}

	private static function get_controller($route) {
		$controller_name = "{$route}Controller";
		$require_path = "controllers/{$controller_name}.class.php";
		require_once $require_path;
		return new $controller_name();
	}
}

?>