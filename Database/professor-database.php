<?php
require_once("connect.php");
require_once("Models/Professor.php");

function insertProfessor($RP, $usuarioId) {
    $query = "insert into professores (RP, usuarioId) values ('{$RP}', {$usuarioId})";
    return mysqli_query($connection, $query);
}

function removeProfessor($RP) {
    $query = "delete from professores where RP = '{$RP}'";
    return mysqli_query($connection, $query);
}

function getAllProfessors() {
    $professores = array();
    $result = mysqli_query($connection, "select * from professores");
    while($arr = mysqli_fetch_assoc($result)) {
        $professor = new Professor($arr["RP"], $arr["usuarioId"]);
        array_push($professores, $professor);
    }
    return $professores;
}

function alterProfessor($professor) {
    $query = "update professores set usuarioId = {$usuarioId} where RP = {$professor->getRP()}";
    return mysqli_query($connection, $query);
}

function getProfessorById($RP) {
    $query = "select * from professores where RP = '{$RP}'";
    $result = mysqli_query($connection, $query);
    $arr = mysqli_fetch_assoc($result);
    $professor = new Professor($arr["RP"], $arr["usuarioId"]);
    return $professor;
}

function getProfessorByUsuarioId($usuarioId) {
    $query = "select * from professores where usuarioId = '{$usuarioId}'";
    $result = mysqli_query($connection, $query);
    $arr = mysqli_fetch_assoc($result);
    $professor = new Professor($arr["RP"], $arr["usuarioId"]);
    return $professor;
}