<?php

$arg = (int)$_GET["a"];

var_dump($arg);

echo "<br/><br/>";

$userIp = $_SERVER["REMOTE_ADDR"];

echo $userIp;

echo "<br/><br/>";

$scriptName = $_SERVER["SCRIPT_NAME"];

echo $scriptName;


?>