<?php

class Endereco {
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c) {
		$this -> logradouro = $a;
		$this -> numero = $b;
		$this -> cidade = $c;
	}

	public function __destruct() {
		echo "<br>";
		var_dump("Destruir");
	}

	public function __toString() {
		return $this -> logradouro .", ". $this -> numero .", ". $this -> cidade;
	}
}

$end = new Endereco("Rua das flores", "123", "Santos");
var_dump($end);
unset($end);

echo "<br><br>";
$newEnd = new Endereco("Rua das margaridas", "321", "Santos");
echo $newEnd;

?>