<?php

namespace Frame\Controllers;

use Mvc\Controller;

class AdminController extends Controller {

	public function __construct() {
		parent::__construct();
		$this->layout = "layout_admin";
	}

	public function actionIndex($params) {
		$this->viewLayout();
	}

}
