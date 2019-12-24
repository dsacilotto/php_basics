<?php

$frase = "A repetição é a mãe da retenção";
$palavra = "mãe";

$q = strpos($frase, $palavra);

var_dump($q);

echo "<br/><br/>";
$texto = substr($frase, 0, $q);
var_dump($texto);

echo "<br/><br/>";
$texto2 = substr($frase, $q);
var_dump($texto2);

echo "<br/><br/>";
$tamPalavra = strlen($palavra);
$texto3 = substr($frase, $q + $tamPalavra + 1); // +1 para remover espaço em branco
var_dump($texto3);

?>