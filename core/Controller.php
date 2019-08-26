<?php
class Controller {

	protected $lang;

	public function __construct() {
		$this->lang = new Language();
	}

	public function loadTemplate($viewName, $viewData = array(), $viewFile = false) {
		require 'views'.D_S.'template.php';
	}

	public function loadView($viewName, $viewData = array(), $viewFile) {
		extract($viewData);
		require 'views'.D_S.$viewFile.D_S.$viewName.'.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'views'.D_S.$viewName.'.php';
	}

}
?>