<?php

class Pessoa {
	public $nome = "Nome Completo"; // Todos
	protected $idade = 48; // Classe e classes extendidas
	private $senha = "123456"; // Somente a classe

	public function verDados() {
		echo $this -> nome . "<br>";
		echo $this -> idade . "<br>";
		echo $this -> senha . "<br>";
	}
}

class Programador extends Pessoa {
	public function verDados() {
		echo get_class($this) . "<br>";

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

echo "<br><br><br>";
$objProg = new Programador();
$objProg -> verDados();

?>