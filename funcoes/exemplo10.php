<?php

//criando uma função com o parametro $callback
function test($callback){

	//processo lento

	//chamando o parametro como uma função
	$callback();

}

//chamando function sem nome
test(function(){

	echo "Terminou";

});

?>