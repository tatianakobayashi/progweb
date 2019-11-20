<?php
	/**
	 *  Aluno
	 */
	class Aluno{

		private $usuarioId;
		private $RA;
		private $ano;
		private $dataNasc;
		
		function __construct($RA, $ano, $dataNasc, $usuarioId)
		{
			$this->usuarioId = $usuarioId;
			$this->RA = $RA;
			$this->ano = $ano;
			$this->dataNasc = $dataNasc;
		}

		public function getUsuarioId()
		{
			return $this->usuarioId;
		}
		public function setUsuarioId($usuarioId)
		{
			$this->usuarioId = $usuarioId;
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
