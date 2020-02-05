<?php

$pessoa = array(

	"nome"=>"jao",
	"idade"=>20
);
//"para cada item da array $pessoa armazenadas em $value, executar o comando:"
foreach ($pessoa as &$value) {
	
	//"se o tipo de dado de $value for identico a integer(valor numerico inteiro), somar por 10."
	if (gettype($value) === "integer") $value += 10;

	//exibir $value na tela
	echo $value."<br>";
}

//mostrar array $pessoa na tela
print_r($pessoa);

//por causa do & no foreach, o valor na array $pessoa foi alterado permanentemente
?>