<?php

// Classe
class Pessoa {
	// Atributo
	public $nome;

	// Método
	public function falar(){
		return "O meu nome é ".$this->nome;
	}
}

$glaucio = new Pessoa();
$glaucio -> nome = "Jose da Silva";
echo $glaucio -> falar();

?>