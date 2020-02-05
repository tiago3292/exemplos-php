<?php 

$condicao = true;

//"enquanto $condicao for verdadeira..."
while ($condicao) {

	//execute $numero, que sorteia numeros randomicos de 1 a 100
	$numero = rand(1, 100);

	//"se o numero sorteado for um 3..."
	if ($numero === 3) {

		//"imprima uma mensagem e altere a $condicao para false"
		echo "eta porra ";
		$condicao = false;
	}

	//"imprima o numero sorteado por rand concatenado com um espaço"
	echo $numero . " ";

}

?>