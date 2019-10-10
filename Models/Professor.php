<?php
	include('Usuario.php');
	/**
	 *  Usuário
	 */
	class Professor extends Usuario{

		private $RP;
		
		function __construct($RP, $nome, $email, $cpf, $senha, $telefone)
		{
			parent::__construct($nome, $email, $cpf, $senha, $telefone);
			$this->RP = $RP;
		}

		public function getRp()
		{
			return $this->RP;
		}
		public function setRp($RP)
		{
			$this->RP = $RP;
		}
	}
?>
