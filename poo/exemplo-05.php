<?php

class Pessoa {
	public $nome = "Nome Completo";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados() {
		echo $this -> nome . "<br>";
		echo $this -> idade . "<br>";
		echo $this -> senha . "<br>";
	}
}

$obj = new Pessoa();

// echo $obj -> nome . "<br>";
// echo $obj -> idade . "<br>";
// echo $obj -> senha . "<br>";

$obj -> verDados();

?>