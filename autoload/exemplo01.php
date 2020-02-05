<?php

function __autoload($abc){

	//var_dump($abc);

	require_once("$abc.php");

}

$carro = new DelRey();

$carro->acelerar(80);

?>