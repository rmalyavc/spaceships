<?php

class Base {
	protected $name;
	protected $errors;
	protected $curr_lang;
	protected $app_strings;

	public function __construct() {
		$this->errors = array();
		$this->curr_lang = empty($_SESSION['curr_lang']) ? 'en_us' : $_SESSION['curr_lang'];
		$lang_path = "include/language/{$this->curr_lang}.php";
		if (!file_exists($lang_path)) {
			$lang_path = "include/language/en_us.php";
		}
		require_once $lang_path;
		$this->app_strings = !empty($app_strings) ? $app_strings : array();
	}
}

?>