<?php
/*
 * Básicos
 */

$nome = "Company";

$site = 'www.company.com.br';

$ano = 1990;

$salario = 5500.99;

$bloqueado = false;

/*
 * Compostos
 */

$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];

echo "<br/><br/>";

$nascimento = new DateTime();

var_dump($nascimento);

echo "<br/><br/>";

/*
 * Especiais
 */

$arquivo = fopen("exemplo-03.php", "r");

var_dump($arquivo);

echo "<br/><br/>";

$nulo = null;

$vazio = "";

?>