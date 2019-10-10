<?php
/**
 *  CopiaFisica
 */
class CopiaFisica
{
	
	private $livro; 
	private $id;
	private $disponivel;

	function __construct($livro, $id, $disponivel)
	{
		$this->id = $id; 
		$this->livro = $livro; 
		$this->disponivel = $disponivel; 
	}

		public function getLivro()
		{
			return $this->livro;
		}
		public function setLivro($livro)
		{
			$this->livro = $livro;
		}

		public function getId()
		{
			return $this->id;
		}
		public function setId($id)
		{
			$this->id = $id;
		}

		public function getDisponivel()
		{
			return $this->disponivel;
		}
		public function setDisponivel($disponivel)
		{
			$this->disponivel = $disponivel;
		}
}


?>
