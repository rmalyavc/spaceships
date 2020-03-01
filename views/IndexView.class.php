<?php

require_once "BaseView.class.php";

class IndexView extends BaseView {
	public function __construct() {
		parent::__construct();
		$this->name = 'Index';
	}

	public function display() {
		$this->template = "views/templates/{$this->name}.html";
		$this->parse_template();
		$this->body_html = $this->template_content;
		parent::display();
		echo $this->template_content;
	}
}

?>