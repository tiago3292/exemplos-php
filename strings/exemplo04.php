<?php

$frase = "fruta não é sobremesa.";

$palavra = "é";


//procura uma determinada letra ou palavra (alvo, oque quer procurar)
$q = strpos($frase, $palavra);

//"recorta" apenas a parte q vc quer de um determinado conteúdo (alvo, início do corte, final do corte)
$texto = substr($frase, 0, $q);

var_dump($texto);

//strlen(): mede a largura de uma string

//exemplo usado para selecionar o texto depois da palavra final do corte anterior (é). para isso, o início do corte é somado com a quantidade de letras dele mesmo (nesse caso, 1).
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

?>