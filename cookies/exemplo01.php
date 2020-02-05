<?php

//array como exemplo
$data = array(
	"empresa"=>"Pegano.meu"
);

//chamando e configurando o cookie
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "ok";

?>