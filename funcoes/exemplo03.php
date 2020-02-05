<?php

//criando uma função com parâmetros que possuem valores padrão
function ola($texto = "+1 dia", $periodo="bom dia"){

	//função retornará um valor de uma string que possue parâmentros
	return "Olá $texto $periodo<br>";

}

//exemplos de uso e edição de parametros
echo ola();
echo ola("","Marilene");
echo ola("Mundo",":^)");
echo ola(", como vai","");

?>