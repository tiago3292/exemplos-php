<?php

//comando que mostra o dia da semana (em número)
$diaDaSemana = date("w");

switch ($diaDaSemana) {
	//"no caso do resultado ser 0, imprima "domingo""
	case "0":
		echo "domingo";
		break;

	//"no caso do resultado ser 1, imprima "segunda feira""
	case "1":
		echo "segunda-feira";
		break;

	case "2":
		echo "terça-feira";
		break;

	case "3":
		echo "quarta-feira";
		break;

	case "4":
		echo "quinta-feira";
		break;

	case "5":
		echo "sexta-feira";
		break;

	case "6":
		echo "sábado";
		break;
	
	//"por padrão (caso nenhum desses números seja o resultado) exiba..."
	default:
		echo "eoq???";
		break;
}

?>