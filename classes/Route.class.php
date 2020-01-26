<?php

class Route {
	public static function get($route) {
		$controller = $this->get_controller($route);
		$controller->create_view();
	}

	private function get_controller($route) {
		$controller_name = "{$route}Controller";
		$require_path = "controllers/{$controller_name}.class.php";
		require_once $require_path;
		return new $controller_name();
	}
}

?>