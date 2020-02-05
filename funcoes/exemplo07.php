<?php

//criando função onde parametro "int" declara que tudo tem q ser numero inteiro e utilizando o operador splat, que permite capturar itens de arrays e encoporá-los na função como parametros. basicamente significa "...e tudo deve ir para o $parametro"
function soma(int ...$valores) {

	//função que calcula a soma dos elementos de um array
	return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";

?>