<?php
/**
 *  Livro
 */
class Livro
{
	
	private $titulo; 
	private $subTítulo; 
	private $autores; 
	private $editora; 
	private $edicao; 
	private $dataDePublicacao; 
	private $capa; 
	private $descricao; 
	private $areaDeConhecimento;
	
	function __construct($titulo, $subTítulo, $autores, $editora, $edicao, $dataDePublicacao, $capa, $descricao, $areaDeConhecimento)
	{
		$this->titulo = $titulo; 
		$this->subTítulo = $subTítulo; 
		$this->autores = $autores; 
		$this->editora = $editora; 
		$this->edicao = $edicao; 
		$this->dataDePublicacao = $dataDePublicacao; 
		$this->capa = $capa; 
		$this->descricao = $descricao; 
		$this->areaDeConhecimento = $areaDeConhecimento;
	}
}


?>
