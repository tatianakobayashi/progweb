<?php
require_once("connect.php");
require_once("Models/LivroFisico.php");
function insertLivroFisico($disponivel, $livroId, $numeroCopia) {
    $query = "insert into livrosFisicos (disponivel, livroId, numeroCopia) values ({$disponivel}, {$livroId}, {$numeroCopia})";
    return mysqli_query($connection, $query);
}
function removeLivroFisico($id) {
    $query = "delete from livrosFisicos where id = {$id}";
    return mysqli_query($connection, $query);
}
function getAllLivroFisicos() {
    $livrosFisicos = array();
    $result = mysqli_query($connection, "select * from livrosFisicos");
    while($arr = mysqli_fetch_assoc($result)) {
        $livroFisico = new LivroFisico($arr["id"], $arr["disponivel"], $arr["livroId"], $arr["numeroCopia"]);
        array_push($livrosFisicos, $livroFisico);
    }
    return $livrosFisicos;
}
function alterLivroFisico($livroFisico) {
    $query = "update livrosFisicos set disponivel = {$livroFisico->getDisponivel()}, livroId = {$livroFisico->getLivroId()}, numeroCopia = {$livroFisico->getNumeroCopia()} where id = {$livroFisico->getId()}";
    return mysqli_query($connection, $query);
}
function getLivroFisicoById($id) {
    $query = "select * from livrosFisicos where id = {$id}";
    $result = mysqli_query($connection, $query);
    $arr = mysqli_fetch_assoc($result);
    $livroFisico = new LivroFisico($arr["id"], $arr["disponivel"], $arr["livroId"], $arr["numeroCopia"]);
    return $livroFisico;
}
function buscarLivroFisicoPorTitulo($titulo) {
    $livrosFisicos = array();
    $query = "select f.* from livrosFisicos f join livros l on (f.livroId = l.id)  where l.titulo like '%{$titulo}%'";
    $result = mysqli_query($connection, $query);
    while($arr = mysqli_fetch_assoc($result)) {
        $livroFisico = new LivroFisico($arr["id"], $arr["disponivel"], $arr["livroId"], $arr["numeroCopia"]);
        array_push($livrosFisicos, $livroFisico);
    }
    return $livroFisico;
}
function buscarLivroFisicoPorString($valor, $campo) {
    $livrosFisicos = array();
    $query = "select f.* from livrosFisicos f join livros l on (f.livroId = l.id) where {$campo} like '%{$valor}%'";
    $result = mysqli_query($connection, $query);
    while($arr = mysqli_fetch_assoc($result)) {
        $livroFisico = new LivroFisico($arr["id"], $arr["disponivel"], $arr["livroId"], $arr["numeroCopia"]);
        array_push($livrosFisicos, $livroFisico);
    }
    return $livroFisico;
}