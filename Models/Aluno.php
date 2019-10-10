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

		public function getRA()
		{
			return $this->RA;
		}
		public function setRA($RA)
		{
			$this->RA = $RA;
		}

		public function getAno()
		{
			return $this->ano;
		}
		public function setAno($ano)
		{
			$this->ano = $ano;
		}

		public function getDataNasc()
		{
			return $this->dataNasc;
		}
		public function setDataNasc($dataNasc)
		{
			$this->dataNasc = $dataNasc;
		}
	}
?>
