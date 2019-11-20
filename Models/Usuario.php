<?php
	/**
	 *  Usuário
	 *
	 *	- Getters e setters prontos
	 *
	 * 	TODO: 
	 *	- Criptografia das senhas (?)
	 */
	class Usuario{
		private $id;
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
		
		function __construct($id, $nome, $email, $cpf, $senha, $telefone)
		{
			$this->id = $id;
			$this->nome = $nome;
			$this->email = $email;
			$this->cpf = $cpf;
			$this->senha = $senha;
			$this->telefone = $telefone;
		}

		public function getId()
		{
			return $this->id;
		}

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getNome()
		{
			return $this->nome;
		}

		public function setNome($nome)
		{
			$this->nome = $nome;
		}

		public function getEmail()
		{
			return $this->email;
		}

		public function setEmail($email)
		{
			$this->email = $email;
		}

		public function getCpf()
		{
			return $this->cpf;
		}

		public function setCpf($cpf)
		{
			$this->cpf = $cpf;
		}

		public function getSenha()
		{
			return $this->senha;
		}

		public function setSenha($senha)
		{
			$this->senha = $senha;
		}

		public function getTelefone()
		{
			return $this->telefone;
		}

		public function setTelefone($telefone)
		{
			$this->telefone = $telefone;
		}
	}
?>
