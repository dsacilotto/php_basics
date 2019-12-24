<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn -> beginTransaction();

$stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 4;

$stmt -> execute(array($id));

// $conn -> rollback();
$conn -> commit();

echo "Excluido com sucesso!";

?>