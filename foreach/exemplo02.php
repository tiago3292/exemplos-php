<form>
	
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="ok">

</form>
<?php

//"se o superglobal coletou dados do html..."
if (isset($_GET)) {

	//"para cada dado $value do array coletado na qual possue o indice $key..."
	foreach ($_GET as $key => $value) {
		
		echo "nome do campo: " . $key . "<br>";

		echo "valor do campo: " . $value;

		echo "<br>";

	}
}

?>