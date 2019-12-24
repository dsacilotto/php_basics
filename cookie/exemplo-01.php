<?php

$data = array(
	"empresa" => "Company"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

?>