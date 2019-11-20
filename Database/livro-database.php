<?php
require_once("connect.php");
require_once("Models/Livro.php"); 
function insertLivro($titulo, $subTitulo, $autores, $editora, $edicao, $dataDePublicacao, $capa, $descricao, $areaDeConhecimento) {
    $dataDePublicacao = date("Y-m-d H:i:s", $dataDePublicacao);
    $query = "insert into livros (titulo, subTitulo, autores, editora, edicao, dataDePublicacao, capa, descricao, areaDeConhecimento) values ('{$titulo}', '{$subTitulo}', '{$autores}', '{$editora}', {$edicao}, '{$dataDePublicacao}', '{$capa}', '{$descricao}', '{$areaDeConhecimento}')";
    return mysqli_query($connection, $query);
}

function removeLivro($id) {
    $query = "delete from livros where id = {$id}";
    return mysqli_query($connection, $query);
}

function getAllLivros() {
    $livros = array();
    $result = mysqli_query($connection, "select * from livros");
    while($arr = mysqli_fetch_assoc($result)) {
        $livro = new Livro($arr["id"], $arr["titulo"], $arr["subTitulo"], $arr["autores"], $arr["editora"], $arr["edicao"], $arr["dataDePublicacao"], $arr["capa"], $arr["descricao"], $arr["areaDeConhecimento"]);
        array_push($livros, $livro);
    }
    return $livros;
}

function alterLivro($livro) {
    $query = "update livros set titulo = '{$livro->getTitulo()}', subTitulo ='{$livro->getSubTitulo()}', autores ='{$livro->getAutores()}', editora ='{$livro->getEditora()}', edicao = {$livro->getEdicao()}, dataDePublicacao ='{$livro->getDataDePublicacao()}', capa ='{$livro->getCapa()}', descricao ='{$livro->getDescricao()}', areaDeConhecimento ='{$livro->getAreaDeConhecimento()}' where id = {$livro->getId()}";
    return mysqli_query($connection, $query);
}

function getLivroById($id) {
    $query = "select * from livros where id = {$id}";
    $result = mysqli_query($connection, $query);
    $arr = mysqli_fetch_assoc($result);
    $livro = new Livro($arr["id"], $arr["titulo"], $arr["subTitulo"], $arr["autores"], $arr["editora"], $arr["edicao"], $arr["dataDePublicacao"], $arr["capa"], $arr["descricao"], $arr["areaDeConhecimento"]);
    return $livro;
}

function buscarLivroPorTitulo($titulo) {
    $livros = array();
    $query = "select * from livros where titulo like '%{$titulo}%'";
    $result = mysqli_query($connection, $query);
    while($arr = mysqli_fetch_assoc($result)) {
        $livro = new Livro($arr["id"], $arr["titulo"], $arr["subTitulo"], $arr["autores"], $arr["editora"], $arr["edicao"], $arr["dataDePublicacao"], $arr["capa"], $arr["descricao"], $arr["areaDeConhecimento"]);
        array_push($livros, $livro);
    }
    return $livro;
}

function buscarLivroPorString($valor, $campo) {
    $livros = array();
    $query = "select * from livros where {$campo} like '%{$valor}%'";
    $result = mysqli_query($connection, $query);
    while($arr = mysqli_fetch_assoc($result)) {
        $livro = new Livro($arr["id"], $arr["titulo"], $arr["subTitulo"], $arr["autores"], $arr["editora"], $arr["edicao"], $arr["dataDePublicacao"], $arr["capa"], $arr["descricao"], $arr["areaDeConhecimento"]);
        array_push($livros, $livro);
    }
    return $livro;
}
