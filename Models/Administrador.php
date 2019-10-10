<?php
	include('Usuario.php');
	/**
	 *  Administrador
	 */
	class Administrador extends Usuario{

		private $registro;
		
		function __construct($registro, $nome, $email, $cpf, $senha, $telefone)
		{
			parent::__construct($nome, $email, $cpf, $senha, $telefone);
			$this->registro = $registro;
		}

		public function getRegistro()
		{
			return $this->registro;
		}
		public function setRegistro($registro)
		{
			$this->registro = $registro;
		}
	}
?>
