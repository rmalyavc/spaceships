<?php

class BaseController extends Base {
	public function __construct() {
		parent::__construct();
		$this->name = 'Base';
	}

	public function create_view() {
		$view_name "{$this->name}View";
		$require_path = "views/{$view_name}.class.php";
		
		if (file_exists($require_path)) {
			require_once $require_path;
			return new $view_name($this->name);
		}
		else {
			$this->errors[] = '404';
			require_once "views/ErrorView.class.php";
			return new ErrorView($this->errors);
		}
	}
}

?>