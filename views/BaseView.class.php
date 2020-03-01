<?php

require_once "classes/Base.class.php";

class BaseView extends Base {
	protected $template;
	protected $template_content;
	protected $body_html;

	public function __construct() {
		parent::__construct();
		$this->name = 'Base';
		$this->body_html = '';
	}

	public function display() {
		$this->template = "views/templates/Base.html";
		$this->parse_template();
	}

	protected function parse_template() {
		if (file_exists($this->template)) {
			$this->template_content = file_get_contents($this->template);
			$template_vars = get_object_vars($this);
			foreach ($template_vars as $var_name => $var_val) {
				if (!is_array($var_val)) {
					$pattern = "/{{\ *\\\${$var_name}\ *}}/i";
					$this->template_content = preg_replace($pattern, $var_val, $this->template_content);
				}
			}
		}
	}
}

?>