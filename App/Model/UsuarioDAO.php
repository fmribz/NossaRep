<?php
namespace App\Model;

class UsuarioDAO{
	protected $db;
	
	public function __construct(\PDO $db){
		$this->db = $db;
	}
	public function Inserir(Usuario $usuario){
		$sql = 'INSERT INTO Usuario (Email, PrimeiroNome, UltimoNome, Senha) VALUES (?,?,?,?)';
		
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(1, $usuario->getEmail());
		$stmt->bindValue(2, $usuario->getPrimeiroNome());
		$stmt->bindValue(3, $usuario->getUltimoNome());
		$stmt->bindValue(4, $usuario->getSenha());
		$stmt->execute();
	}
	
	public function Alterar(Usuario $usuario){
		
	}
	
	public function Consultar($email){
		$sql = 'SELECT * FROM Usuario WHERE Email = ?';
		
		$stmt = Conexao::getCon()->prepare($sql);
		$stmt->bindValue(1, $email);
		$stmt->execute();
		
		if($stmt->rowCount() != 1):
			throw new \Exception("Usuário não cadastrado.");
		else:
			header('Location: ..\..\usuarioIndex.php');
		endif;
	}
	
	public function Excluir($email){
		
	}
}