<?php

session_id('4993823238c82feed86dbad772ca47e7');

require_once("config.php");

session_regenerate_id();

echo session_id();

echo "<br/><br/>";
var_dump($_SESSION);

?>