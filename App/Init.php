<?php
namespace App;

use Vendor/fmr/Init/Bootstrap;

class Init extends Bootstrap {
	protected function InitRoutes(){
		//Index
		$rotas['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
		$rotas['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
		
		//Usuario
		$rotas['usuario'] = array('route' => '/usuario', 'controller' => 'Usuario', 'action' => 'usuario');
		$rotas['login'] = array('route' => '/login', 'controller' => 'Usuario', 'action' => 'login');
		$rotas['cadastrousuario'] = array('route' => '/cadastrousuario', 'controller' => 'Usuario', 'action' => 'cadastrousuario');
		$rotas['inserirusuario'] = array('route' => '/inserirusuario', 'controller' => 'Usuario', 'action' => 'inserirusuario');
		
		//Retorno das rotas
		$this->setRoutes($rotas);
	}
	
	public static function getDb(){
		$db = new \PDO('mysql:host=localhost;dbname=bdnossarep;charset=utf8', 'root', '');
		return $db;
	}
}