<?php
/**
 *  Ebook
 */
class Ebook
{
	
	private $id; 
	private $disponivel; 
	private $livroId; 

	function __construct($disponivel, $livroId)
	{
		$this->disponivel = $disponivel; 
		$this->livroId = $livroId; 
	}

	function __construct($id, $disponivel, $livroId)
	{
		$this->id = $id; 
		$this->disponivel = $disponivel; 
		$this->livroId = $livroId; 
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
}


?>
