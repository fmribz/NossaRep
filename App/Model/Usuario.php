<?php
namespace App\Model;

class Usuario{
	private $email, $primeiroNome, $ultimoNome, $senha;
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email = filter_var("$email", FILTER_SANITIZE_EMAIL);
	}
	
	public function getPrimeiroNome(){
		return $this->primeiroNome;
	}
	
	public function setPrimeiroNome($primeiroNome){
		$this->primeiroNome = filter_var("$primeiroNome", FILTER_SANITIZE_STRING);
	}
	
	public function getUltimoNome(){
		return $this->ultimoNome;
	}
	
	public function setUltimoNome($ultimoNome){
		$this->ultimoNome = filter_var("$ultimoNome", FILTER_SANITIZE_STRING);
	}
	
	public function getSenha(){
		return $this->senha;
	}
	
	public function setSenha($senha){
		$this->senha = password_hash($senha, PASSWORD_DEFAULT);
	}
	
	public function validarCampos(){
		if($this->email  == ""){
			$erros = array("Preencha o campo Email");
		}
		if($this->primeiroNome  == ""){
			$erros = array("Preencha o campo Primeiro Nome");
		}
		if($this->ultimoNome  == ""){
			$erros = array("Preencha o campo Último Nome");
		}
		if($this->senha  == ""){
			$erros = array("Preencha o campo Senha");
		}
	}
}