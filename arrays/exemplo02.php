<?php

//criando uma array bidimensional
//$variavel [posição][array] = valor
$carros [0][0] = "GM";
$carros [0][1] = "Cobalt";
$carros [0][2] = "Onix";
$carros [0][3] = "Camaro";

$carros [1][0] = "Ford";
$carros [1][1] = "Fiesta";
$carros [1][2] = "Fusion";
$carros [1][3] = "Eco Sport";

//imprindo o array 3 da posição 0
echo $carros[0][3];

//mostrando o ultimo array de uma posição
echo end($carros[1]);

?>