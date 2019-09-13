<?php

namespace application\controllers;

use application\core\Controller;

class PageController extends Controller{
	
	public function page(){
		echo 'Страница1';
	}
	public function page_controller(){
		echo 'Страница2';
	}
}