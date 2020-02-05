<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php

if (isset($_POST["busca"])) {
	//usando strip_tags para impedir ataques xss (exceções são inseridas depois da vírgula)
	//echo stirp_tags($_POST["busca"], "<strong>");

	//transformando tags em string para impedir ataques xss
	echo htmlentities($_POST["busca"]);
}

?>