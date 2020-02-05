<?php

//criando array
$pessoas = array();

//adicionando itens em uma array existente
array_push($pessoas, array(
	"nome"=>"joão",
	"idade"=>20
));

array_push($pessoas, array(
	"nome"=>"Glaucio",
	"idade"=>25
));

//codificando $pessoas em json 
echo json_encode($pessoas);

?>