<?php

//criando função onde parametro "int" declara que tudo tem q ser numero inteiro e utilizando o operador splat, que permite capturar itens de arrays e encoporá-los na função como parametros. basicamente significa "...e tudo deve ir para o $parametro"
//depois da função, tem a declaração de tipo de retorno. neste exemplo, a função será executada e o resultado final será convertido em string.
function soma(float ...$valores):string {

	return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";

?>