<?php

//criando a função
function ola(){

	//colocando a função em uma variavel (essa função basicamente adiciona parametros em uma função já criada[mais info no manual])
	$argumentos = func_get_args();

	return $argumentos;
}

//mostrando a função em array na tela e adicionando parametros em tempo real
var_dump(ola("teste", 10));

?>