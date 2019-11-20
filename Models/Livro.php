<?php
/**
 *  Livro
 */
class Livro
{
	
	private $id; 
	private $titulo; 
	private $subTitulo; 
	private $autores; 
	private $editora; 
	private $edicao; 
	private $dataDePublicacao; 
	private $capa; 
	private $descricao; 
	private $areaDeConhecimento;
	
	function __construct($id, $titulo, $subTitulo, $autores, $editora, $edicao, $dataDePublicacao, $capa, $descricao, $areaDeConhecimento)
	{
		$this->id = $id; 
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

	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getTitulo()
	{
		return $this->titulo;
	}
	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;
	}

	public function getSubTitulo()
	{
		return $this->subTitulo;
	}
	public function setSubTitulo($subTitulo)
	{
		$this->subTitulo = $subTitulo;
	}

	public function getAutores()
	{
		return $this->autores;
	}
	public function setAutores($autores)
	{
		$this->autores = $autores;
	}

	public function getEditora()
	{
		return $this->editora;
	}
	public function setEditora($editora)
	{
		$this->editora = $editora;
	}

	public function getEdicao()
	{
		return $this->edicao;
	}
	public function setEdicao($edicao)
	{
		$this->edicao = $edicao;
	}

	public function getDataDePublicacao()
	{
		return $this->dataDePublicacao;
	}
	public function setDataDePublicacao($dataDePublicacao)
	{
		$this->dataDePublicacao = $dataDePublicacao;
	}

	public function getCapa()
	{
		return $this->capa;
	}
	public function setCapa($capa)
	{
		$this->capa = $capa;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}
	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}

	public function getAreaDeConhecimento()
	{
		return $this->areaDeConhecimento;
	}
	public function setAreaDeConhecimento($areaDeConhecimento)
	{
		$this->areaDeConhecimento = $areaDeConhecimento;
	}
}
?>
