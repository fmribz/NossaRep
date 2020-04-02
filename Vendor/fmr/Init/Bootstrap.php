<?php
namespace Vendor\fmr\Init;

abstract class Bootstrap {
	private $routes;

	public function __construct(){
		$this->InitRoutes();
		$this->Run($this->getUrl());
	}
	
	abstract protected function InitRoutes();
	
	protected function setRoutes(array $routes){
		$this->routes = $routes;
	}
	
	protected function getUrl(){
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
	
	/* Este método utiliza o "arra_walk", que serve para percorrer um array e aplicar
	 * uma função para cada elemento.
	 * A função utilizada no array_walk é uma função anônima, que nada mais é que uma função
	 * sem nome e que não dá para ser usada em outro lugar 
	 */
	protected function Run($url){
		array_walk($this->routes, function($route) use($url){
			//Verifica se a rota da URL digitada é igaul ao índice route da iteração
			if ($url == $route['route']){
				//Se for, cria-se um caminho com o nome do controller específico
				$class = "App\\Controller\\".ucfirst($route['controller']);
				
				//Parametriza a action específica do controller
				$action = $route['action'];
				
				//Instância uma classe controller do caminho do $class
				$controller = new $class();
				
				//Chama o método $action da classe $controller.
				$controller->$action();
			}
		});
	}
}