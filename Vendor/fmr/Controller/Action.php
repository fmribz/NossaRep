<?php
namespace Vendor\fmr\Controller;

class Action{
	protected $view;
	protected $action;
	
	public function __construct(){
		$this->view = new \stdClass;
	}
	
	public function render($action, $layout = true){
		$this->action = $action;
		
		if($layout == true && file_exists('../App/View/layout.php')){
			include_once '../App/View/layout.php';
		}
		else{
			$this->content();
		}
	}
	
	public function content(){
		$atual = get_class($this);
		$class = strtolower(str_replace("App\\Controller\\", "", $atual));
		include_once '../App/View/'.ucfirst($class).'/'.$this->action.'.php';
	}
}