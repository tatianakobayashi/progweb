<?php
	/**
	 *  Usuário
	 */
	class Usuario{

		private $nome;
		private $email;
		private $cpf;
		private $senha;
		private $telefone;
		
		function __construct($nome, $email, $cpf, $senha, $telefone)
		{
			$this->nome = $nome;
			$this->email = $email;
			$this->cpf = $cpf;
			$this->senha = $senha;
			$this->telefone = $telefone;
		}
	}
?>
