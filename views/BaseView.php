<?php

require_once "classes/Base.class.php";

class BaseView extends Base {
	public function __contruct() {
		parent::__contruct();
		$this->name = 'Base';
	}
	public function display() {
		$require_path = "views/templates/{$this->name}.html";
	}
}

?>