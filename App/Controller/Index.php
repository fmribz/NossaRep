<?php
namespace App\Controller;

use Vendor\fmr\Controller\Action;

class Index extends Action{
	public function Index(){
		$this->view->title = 'NossaRep - Home';
		$this->render('index', false);
	}
	
	public function Empresa(){
		$this->view->title = 'NossaRep - Empresa';
		$this->render('empresa');
	}
}