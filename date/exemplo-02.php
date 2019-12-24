<?php

$ts = strtotime("2001-09-11");
echo date("l, d/m/Y", $ts);

echo "<br><br>";
$ts = strtotime("now");
echo date("l, d/m/Y", $ts);

echo "<br><br>";
$ts = strtotime("+1 day");
echo date("l, d/m/Y", $ts);

?>