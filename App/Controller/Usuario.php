<?php
namespace App\Controller;

use Vendor\fmr\Controller\Action;
use App\Model\UsuarioDAO;

class Usuario extends Action{
	public function Login(){
		$this->view->title = 'NossaRep - Login';
		$this->view->classBody = 'bg-usuario';
		$this->render('login');
	}
	
	public function CadastroUsuario(){
		$this->view->title = 'NossaRep - Cadastro de Usuário';
		$this->view->classBody = 'bg-usuario';
		$this->render('cadastrar');
	}
	
	public function InserirUsuario(){
		try{
			$usuario = new \App\Model\Usuario;
			$usuario->setPrimeiroNome($_POST['primeiroNome']);
			$usuario->setUltimoNome($_POST['ultimoNome']);
			$usuario->setEmail($_POST['email']);
			$usuario->setSenha($_POST['senha']);
		
			$usuarioDAO = new UsuarioDao(\App\Init::getDb());
			$usuarioDAO->Inserir($usuario);
		
			header('Location: /');
		}
		catch(Exception $e){
			
		}
	}
}