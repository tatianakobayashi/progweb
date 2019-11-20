<?php
	/**
	 *  Administrador
	 */
	class Administrador{

		private $registro;
		
		function __construct($registro, $usuarioId)
		{
			$this->registro = $registro;
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
