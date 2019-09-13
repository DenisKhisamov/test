<?php

namespace application\controllers;

use application\core\Controller;


class MainController extends Controller{
	
	public function IndexAction(){
		if (!empty($_POST))
		{
			$mes = '';
			$fio = $_POST['fio'];
			$email = $_POST['email'];
			
			if ($fio == '')
			{
				$mes = 'Заполните поле ФИО';
			}
			if ($email == '')
			{
				$mes = 'Заполните поле Email';
			}
			
			if ($mes == '')
			{
				$res_id = $this->model->addPerson();
				//debug($res_id);
				$link = '/list/show'.$res_id.'';
				exit(json_encode(['status' => 'success', 'message' => $link]));
			}
			else
			{
				exit(json_encode(['status' => 'error', 'message' => $mes]));
			}
			
		}
		
		
		$result = $this->model->getList();
		
		$vars = [
			'list' => $result,
		];
		$this->view->render('Главная страница', $vars);
	}
	
}