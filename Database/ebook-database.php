<?php
require_once("connect.php");
require_once("Models/Ebook.php");
function insertEbook($disponivel, $livroId) {
    $query = "insert into ebooks (disponivel, livroId) values ({$disponivel}, {$livroId})";
    return mysqli_query($connection, $query);
}

function removeEbook($id) {
    $query = "delete from ebooks where id = {$id}";
    return mysqli_query($connection, $query);
}

function getAllEbooks() {
    $ebooks = array();
    $result = mysqli_query($connection, "select * from ebooks");
    while($arr = mysqli_fetch_assoc($result)) {
        $ebook = new Ebook($arr["id"], $arr["disponivel"], $arr["livroId"]);
        array_push($ebooks, $ebook);
    }
    return $ebooks;
}

function alterEbook($ebook) {
    $query = "update ebooks set disponivel = {$ebook->getDisponivel()}, livroId = {$ebook->getLivroId()} where id = {$ebook->getId()}";
    return mysqli_query($connection, $query);
}

function getEbookById($id) {
    $query = "select * from ebooks where id = {$id}";
    $result = mysqli_query($connection, $query);
    $arr = mysqli_fetch_assoc($result);
    $ebook = new Ebook($arr["id"], $arr["disponivel"], $arr["livroId"]);
    return $ebook;
}

function buscarEbookPorTitulo($titulo) {
    $ebooks = array();
    $query = "select e.* from ebooks e join livros l on (e.livroId = l.id)  where l.titulo like '%{$titulo}%'";
    $result = mysqli_query($connection, $query);
    while($arr = mysqli_fetch_assoc($result)) {
        $ebook = new Ebook($arr["id"], $arr["disponivel"], $arr["livroId"]);
        array_push($ebooks, $ebook);
    }
    return $ebook;
}

function buscarEbookPorString($valor, $campo) {
    $ebooks = array();
    $query = "select e.* from ebooks e join livros l on (e.livroId = l.id) where {$campo} like '%{$valor}%'";
    $result = mysqli_query($connection, $query);
    while($arr = mysqli_fetch_assoc($result)) {
        $ebook = new Ebook($arr["id"], $arr["disponivel"], $arr["livroId"]);
        array_push($ebooks, $ebook);
    }
    return $ebook;
}
