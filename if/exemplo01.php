<?php

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

//"se o valor do $qualASuaIdade for menor que $idadeCrianca,"
if ($qualASuaIdade < $idadeCrianca) {

	echo "pivete";

} /*"se não for menor, veja se o $qualASuaIdade é menor que $idadeMaior"*/else if ($qualASuaIdade < $idadeMaior) {

	echo "aborrecente";

} /*"se não for menor, veja se o $qualASuaIdade é menor que $idadeMelhor"*/else if ($qualASuaIdade < $idadeMelhor) {

	echo "adultão";
} /*"se não for menor,"*/else {

	echo "boomer";
}

echo "<br>";

//exemplo de um operador ternario sendo usado. ?=if, :=else
echo ($qualASuaIdade < $idadeMaior)?"menó":"adutão";

?>