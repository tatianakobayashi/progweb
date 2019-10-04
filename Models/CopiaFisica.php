<?php
/**
 *  CopiaFisica
 */
class CopiaFisica
{
	
	private $livro; 
	private $id;
	private $disponivel;
	private $edicao;

	function __construct($livro, $id, $disponivel, $edicao)
	{
		$this->id = $id; 
		$this->livro = $livro; 
		$this->disponivel = $disponivel; 
		$this->edicao = $edicao; 
	}
}


?>
