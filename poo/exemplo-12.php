<?php

function incluirClasses($nomeClasse) {
	if (file_exists($nomeClasse. ".php")) require_once($nomeClasse. ".php");
}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse) {
	if (file_exists("nome_do_diretorio". DIRECTORY_SEPARATOR .$nomeClasse. ".php"))
		require_once("nome_do_diretorio". DIRECTORY_SEPARATOR .$nomeClasse. ".php");
});

$carro = new DelRey();

$carro -> acelerar(200);

?>