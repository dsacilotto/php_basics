<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad -> setNome("Full Name");
$cad -> setEmail("full_name@email.com");
$cad -> setSenha("123456");

$cad -> registrarVenda();

?>