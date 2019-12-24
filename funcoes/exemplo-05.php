<?php

$a = 10;

function trocaValor($a) {
	$a = 50;
	return $a;
}

function troca(&$a) { // & - passagem de param por referência
	$a += 10;
	return $a;
}

echo $a;

echo "<br/><br/>";
echo trocaValor($a);

echo "<br/><br/>";
echo troca($a);

echo "<br/><br/>";
echo $a;

?>