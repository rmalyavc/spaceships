<?php 

require_once "controllers/BaseController.class.php";

class IndexController extends BaseController {
	public function __construct() {
		parent::__construct();
		$this->name = 'Index';
	}
}

?>