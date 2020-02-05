<?php

$meses = array(
	"janeiro", "fevereiro", "março",
	"abril", "maio", "junho",
	"julho", "agosto", "setembro",
	"outubro", "novembro", "dezembro"
);

//"foreach ($variable as $key => $value){}"

//$variable: array onde vc quer usar o foreach
//$key: chave(nome)que será associado ao $value (não é obrigatório)
//$value: variável aonde será atribuido o resultado da leitura do foreach

//"para cara item do array $meses (que será atribuído ao $mes)na qual possuem a chave $index, executar o seguinte comando (avançando 1 ponteiro até o término da array):"
foreach ($meses as $index => $mes) {

	echo "Indice: ".$index."<br>";
	echo "o mês é: ".$mes."<br><br>";
}

?>