<?php
/**
 *  Livro
 */
class Livro
{
	
	private $titulo; 
	private $subTitulo; 
	private $autores; 
	private $editora; 
	private $edicao; 
	private $dataDePublicacao; 
	private $capa; 
	private $descricao; 
	private $areaDeConhecimento;
	
	function __construct($titulo, $subTitulo, $autores, $editora, $edicao, $dataDePublicacao, $capa, $descricao, $areaDeConhecimento)
	{
		$this->titulo = $titulo; 
		$this->subTitulo = $subTitulo; 
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
