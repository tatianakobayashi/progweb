<?php
/**
 *  Ebook
 */
class Ebook extends Livro
{
	
	private $disponivel; 

	function __construct($disponivel, $titulo, $subTítulo, $autores, $editora, $edicao, $dataDePublicacao, $capa, $descricao, $areaDeConhecimento)
	{
		parent::__construct($titulo, $subTítulo, $autores, $editora, $edicao, $dataDePublicacao, $capa, $descricao, $areaDeConhecimento);
		$this->disponivel = $disponivel; 
	}
}


?>
