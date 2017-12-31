<?php

namespace Frame\Controllers;

use Mvc\Controller;

class MemberController extends Controller {

	public function __construct() {
		parent::__construct();
		$this->layout			 = "layout_member";
		$this->view->page_title	 = l("Members Home");
	}

	public function actionIndex($params) {
		$this->viewLayout();
	}

}
