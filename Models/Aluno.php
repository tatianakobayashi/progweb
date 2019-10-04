<?php
	include('Usuario.php');
	/**
	 *  Usuário
	 */
	class Aluno extends Usuario{

		private $RA;
		private $ano;
		private $dataNasc;
		
		function __construct($RA, $ano, $dataNasc, $nome, $email, $cpf, $senha, $telefone)
		{
			parent::__construct($nome, $email, $cpf, $senha, $telefone);
			$this->RA = $RA;
			$this->ano = $ano;
			$this->dataNasc = $dataNasc;
		}
	}
?>