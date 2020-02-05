<?php
//mostrando diferença entre variavel e parametro

$a = 10;

function trocaValor($a){

	$a += 50;

	return $a;

}

echo trocaValor($a);
echo "<br>";
echo $a;

//um mostra o valor da função e o outro mostra o da variável. Embora tenham o mesmo nome, eles são itens diferentes.
?>