<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "baguiu ta disabilitado";
		break;

	case PHP_SESSION_NONE:
		echo "baguiu ta habilitado mas tem nada q exeste";
		break;

	case PHP_SESSION_ACTIVE:
		echo "baguiu ta habilitado e exeste";
		break;
	
}

?>