<?php

namespace Frame\Controllers;

class HomeController extends \Mvc\Controller {

	public function __construct() {
		parent::__construct();
		$this->layout = "layout";
	}

	public function actionIndex($params) {
		$this->viewLayout();
	}

}
