<?php
require_once("connect.php");
require_once("Models/Administrador.php");

function insertAdministrador($registro, $usuarioId) {
    $query = "insert into administradores (registro, usuarioId) values ('{$registro}', {$usuarioId})";
    return mysqli_query($connection, $query);
}

function removeAdministrador($registro) {
    $query = "delete from administradores where registro = '{$registro}'";
    return mysqli_query($connection, $query);
}

function getAllAdministradors() {
    $administradores = array();
    $result = mysqli_query($connection, "select * from administradores");
    while($arr = mysqli_fetch_assoc($result)) {
        $administrador = new Administrador($arr["registro"], $arr["usuarioId"]);
        array_push($administradores, $administrador);
    }
    return $administradores;
}

function alterAdministrador($administrador) {
    $query = "update administradores set usuarioId = {$usuarioId} where registro = {$administrador->getRegistro()}";
    return mysqli_query($connection, $query);
}

function getAdministradorById($registro) {
    $query = "select * from administradores where registro = '{$registro}'";
    $result = mysqli_query($connection, $query);
    $arr = mysqli_fetch_assoc($result);
    $administrador = new Administrador($arr["registro"], $arr["usuarioId"]);
    return $administrador;
}

function getAdministradorByUsuarioId($usuarioId) {
    $query = "select * from administradores where usuarioId = '{$usuarioId}'";
    $result = mysqli_query($connection, $query);
    $arr = mysqli_fetch_assoc($result);
    $administrador = new Administrador($arr["registro"], $arr["usuarioId"]);
    return $administrador;
}