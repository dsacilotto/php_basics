<?php

$anoNascimento = 1987;

$nome1 = "Nome";

$sobrenome = "Completo";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

// Check if var exists
if (isset($nome1))
	echo $nome1;

?>