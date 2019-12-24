<?php

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 25
));

echo json_encode($pessoas);

echo "<br/><br/>";
echo json_encode($pessoas[0]);

echo "<br/><br/>";
echo json_encode($pessoas[0]['nome']);

?>