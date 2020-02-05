<?php

//usando a classe de representação de data e hora. possui mais recursos do que a função
$dt = new DateTime();

//Representa um intervalo entre datas.
//Um intervalo de data armazena, tanto uma quantidade de tempo (em anos, meses, dias, horas, etc), quanto uma string de tempo relativo no formato que o construtor da classe DateTime possui suporte.
$periodo = new DateInterval("P15D");

//usando -> para acessar um método
echo $dt->format("d/m/Y H:i:s");

//acessando um método que adiciona uma data
$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");

?>