<?php
require_once("connect.php");
require_once("Models/Aluno.php");

function insertAluno($RA, $ano, $dataNasc, $usuarioId) {
    $dataNasc = date("Y-m-d H:i:s", $dataNasc);
    $query = "insert into alunos (RA, ano, dataNasc, usuarioId) values ('{$RA}', {$ano}, '{$dataNasc}', {$usuarioId})";
    return mysqli_query($connection, $query);
}

function removeAluno($RA) {
    $query = "delete from alunos where RA = '{$RA}'";
    return mysqli_query($connection, $query);
}

function getAllAlunos() {
    $alunos = array();
    $result = mysqli_query($connection, "select * from alunos");
    while($arr = mysqli_fetch_assoc($result)) {
        $aluno = new Aluno($arr["RA"], $arr["ano"], $arr["dataNasc"], $arr["usuarioId"]);
        array_push($alunos, $aluno);
    }
    return $alunos;
}

function alterAluno($aluno) {
    $query = "update alunos set ano = {$ano}, dataNasc = '{$dataNasc}', usuarioId = {$usuarioId} where RA = {$aluno->getRA()}";
    return mysqli_query($connection, $query);
}

function getAlunoById($RA) {
    $query = "select * from alunos where RA = '{$RA}'";
    $result = mysqli_query($connection, $query);
    $arr = mysqli_fetch_assoc($result);
    $aluno = new Aluno($arr["RA"], $arr["ano"], $arr["dataNasc"], $arr["usuarioId"]);
    return $aluno;
}

function getAlunoByUsuarioId($usuarioId) {
    $query = "select * from alunos where usuarioId = '{$usuarioId}'";
    $result = mysqli_query($connection, $query);
    $arr = mysqli_fetch_assoc($result);
    $aluno = new Aluno($arr["RA"], $arr["ano"], $arr["dataNasc"], $arr["usuarioId"]);
    return $aluno;
}