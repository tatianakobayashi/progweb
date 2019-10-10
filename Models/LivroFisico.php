<?php
/**
 *  LivroFisico
 */
class LivroFisico extends Livro
{
	
	private $numeroCopias; 
	private $copias;

	function __construct($numeroCopias, $titulo, $subTítulo, $autores, $editora, $edicao, $dataDePublicacao, $capa, $descricao, $areaDeConhecimento)
	{
		parent::__construct($titulo, $subTítulo, $autores, $editora, $edicao, $dataDePublicacao, $capa, $descricao, $areaDeConhecimento);
		$this->numeroCopias = $numeroCopias; 

		// ???
		$copias = array();
	}

	public function getNumeroCopias()
	{
		return $this->numeroCopias;
	}
	public function setNumeroCopias($numeroCopias)
	{
		$this->numeroCopias = $numeroCopias;
	}

	public function getCopias()
	{
		return $this->copias;
	}
	public function setCopias($copias)
	{
		$this->copias = $copias;
	}

}


?>
