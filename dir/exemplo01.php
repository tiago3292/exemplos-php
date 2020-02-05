<?php

$name = "images";

if (!is_dir($name)) {

	mkdir($name);
	echo "diretório criado";

} else {

	rmdir($name);
	echo "ja tem vacilao: $name foi removido";

}

?>