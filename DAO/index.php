<?php

require_once("config.php");

$sql = new Sql();
$usuarios = $sql -> select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);

// Busca por 1 usuário
$user = new Usuario();
$user -> loadById(3);
echo $user;


// Busca todos os usuários
$users = Usuario::getList(); // por getList ser static
echo json_encode($users);

// Lista de usuários buscando pelo login
$search = Usuario::search("o");
echo json_encode($search);

// Busca por login e senha
$user = new Usuario();
$user -> login("user", "123456");
echo $user;

// Insere e retorna um novo usuário
$aluno = new Usuario("aluno", "@lun0");
$aluno -> insert();

echo $aluno;

// Update de usuário
$usuario = new Usuario();

$usuario -> loadById(3);
$usuario -> update("aluno", "@lun0");

echo $usuario;

// Apaga um usuário
$usuario = new Usuario();

$usuario -> loadById(3);
$usuario -> delete();

echo $usuario;
?>