<form method="POST">
	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php

if (isset($_POST['busca'])) {
	echo strip_tags($_POST['busca']);
	/*
		Liberando algumas tags
		echo strip_tags($_POST['busca'], "<strong><a>");

		Elimina as tags, porem escreve na tela
		echo htmlentities($_POST['busca']);
	*/
}

?>