<?php

$pessoas = array();

//usando uma função que adiciona um item na array depois dela já ter sido criada
//array_push($alvo, array(novoitem));

array_push($pessoas, array(
	"nome"=>"joão",
	"idade"=>20
));

array_push($pessoas, array(
	"nome"=>"Glaucio",
	"idade"=>25
));

//imprimindo um item específico de uma array específica do conjunto de arrays
print_r($pessoas[0]["nome"]);

?>