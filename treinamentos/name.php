<form>
	
	<input type="text" name="nome">
	<input type="submit" value="ok">

</form>

<?php

if (isset($_GET)) {

	foreach ($_GET as $key => $value) {
		echo "Saudações ".$value."!";
	}
}

?>