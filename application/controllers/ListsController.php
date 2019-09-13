<?php

namespace application\controllers;

use application\core\Controller;

class ListsController extends Controller{
	
	public function showAction(){

		$url = trim($_SERVER['REQUEST_URI'], '/');
		$id = str_replace("list/show", "", $url);
		$result = $this->model->getList($id);
		$vars = [
			'list' => $result,
		];
		$this->view->render('Список', $vars);
	}
	
}