<?php

//criando uma função: nome(parametro){o que ela faz;}
function ola(){

	//função retornará uma string
	return "teste<br>";

}

//exibindo a função (exibindo o item retornado)
echo ola();
$frase =  ola();

//exibindo a contagem de caracteres da função
echo strlen($frase);

?>