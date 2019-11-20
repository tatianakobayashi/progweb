<?php
/**
 *  LivroFisico
 */
class LivroFisico extends Livro
{
	
	private $id;
	private $numeroCopia; 
	private $disponivel; 
	private $livroId; 

	function __construct($disponivel, $livroId, $numeroCopia)
	{
		$this->disponivel = $disponivel; 
		$this->livroId = $livroId;
		$this->numeroCopia = $numeroCopia;
	}

	function __construct($id, $disponivel, $livroId, $numeroCopia)
	{
		$this->id = $id;
		$this->disponivel = $disponivel; 
		$this->livroId = $livroId;
		$this->numeroCopia = $numeroCopia;
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

	public function getLivroId()
	{
		return $this->livroId;
	}
	public function setLivroId($livroId)
	{
		$this->livroId = $livroId;
	}

	public function getNumeroCopia()
	{
		return $this->numeroCopia;
	}
	public function setNumeroCopia($numeroCopia)
	{
		$this->numeroCopia = $numeroCopia;
	}

}


?>
