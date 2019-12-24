<?php

require_once("config.php");

echo session_save_path();

echo "<br/><br/>";
var_dump(session_status()); // https://www.php.net/manual/pt_BR/function.session-status.php

?>