<?php
require_once('connect.php');
require_once('Models/Usuario.php');

function getUsuario($email, $senha) {
    $query = "select * from usuarios where email='{$email}'";
   
    $resultado = mysqli_query($connection, $query);
    $arr = mysqli_fetch_assoc($resultado);

    if(!password_verify ($senha, $arr["senha"])) return false;

    $usuario = null;
    $usuario = new Usuario($arr["id"], $arr["nome"], $arr["email"], $arr["cpf"], $arr["senha"], $arr["telefone"]);
    return $usuario;
}

function insertUsuario($nome, $email, $cpf, $senha1, $senha1, $telefone)
{
    if($senha1 != $senha2) return false;

    $senha = password_hash($senha1, PASSWORD_DEFAULT);

    $query = "insert into usuarios (nome, email, cpf, senha, telefone) values ('{$nome}', '{$email}', '{$cpf}', '{$senha}', '{$telefone}')";
    return mysqli_query($connection, $query);
}

function alterUsuario($id, $nome, $email, $cpf, $senhaVelha, $senha1, $senha2, $telefone) {
    
    $usuario = getUsuarioById($connection, $id);

    if(!password_verify ($senhaVelha, $usuario->getSenha())) return false;
    if($senha1 != $senha2) return false;

    $senha = password_hash($senha1, PASSWORD_DEFAULT);

    $query = "update usuarios set nome = '{$nome}', email = '{$email}', cpf = '{$cpf}', senha = '{$senha1}', telefone = '{$telefone}' where id = {$id}";
    return mysqli_query($connection, $query);
}

function removeUsuario($id) {
    $query = "delete from usuarios where id = {$id}";
    return mysqli_query($connection, $query);
}

function getUsuarioById($id) {
    $query = "select * from usuarios where id = {$id}";
    $result = mysqli_query($connection, $query);
    $arr = mysqli_fetch_assoc($result);
    $usuario = new Usuario($arr["id"], $arr["nome"], $arr["email"], $arr["cpf"], $arr["senha"], $arr["telefone"]);
    return $usuario;
}
