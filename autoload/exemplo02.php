<?php

function incluirClasses($abc){

	if (file_exists($abc.".php") === true) {
		require_once($abc.".php");
	}
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($abc){

	if (file_exists("abstratas".DIRECTORY_SEPARATOR.$abc.".php") === true) {
		require_once("abstratas".DIRECTORY_SEPARATOR.$abc.".php");
	}

});

$carro = new DelRey();

$carro->acelerar(80);

?>