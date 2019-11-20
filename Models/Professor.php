<?php
	/**
	 *  Professor
	 */
	class Professor{

		private $usuarioId;
		private $RP;
		
		function __construct($RP, $usuarioId)
		{
			$this->RP = $RP;
			$this->usuarioId = $usuarioId;
		}

		public function getUsuarioId()
		{
			return $this->usuarioId;
		}
		public function setUsuarioId($usuarioId)
		{
			$this->usuarioId = $usuarioId;
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
