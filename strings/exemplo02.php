<?php

$nome = "jao rangel";
/////////////////////////////////////////////
//nome em azul:nome da função              //
//(): função sendo chamada                 //
//conteúdo dentro do (): argumento/variável//
/////////////////////////////////////////////

//deixa todas as letras maiúsculas
$nome = strtoupper($nome);

echo $nome;

//deixa tudas as letras minúsculas
$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";

//deixa a primeira letra de cada palavra em maiúsculo
echo ucwords($nome);

echo "<br>";

//deixa apenas a primeira letra em maiúsculo
echo ucfirst($nome);

?>