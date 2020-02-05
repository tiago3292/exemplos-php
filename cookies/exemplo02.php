<?php

//recuperando um cookie caso ele exista
if (isset ($_COOKIE["NOME_DO_COOKIE"])) {

	//retira o json e converte em objeto
	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

	//imprime uma info especifica na tela
	echo $obj->empresa;

}

?>