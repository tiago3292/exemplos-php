<?php

// || = "ou (or)". ou um, ou outro. neste exemplo, || irá analisar as duas contas. se pelo menos uma delas forem verdadeiras, dará true. se nenhuma for verdadeira, false.
$resultado1 = (10 + 3) / 2 > 5 || 10 + 5 < 3;

//&& = "e (and)". neste exemplo, && está fazendo um comparativo entre as duas contas. se as duas forem iguais, dará true. se não, false.
$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3;

var_dump($resultado1);

echo "<br>";

var_dump($resultado2);

?>