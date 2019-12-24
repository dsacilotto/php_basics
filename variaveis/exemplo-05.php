<?php

$nome = "Nome";

function teste() {
	global $nome;
	echo $nome;
}

function teste2() {
	$nome = "João";
	echo $nome . " agora no teste2";
}

teste();

echo "<br/><br/>";

teste2();

?>