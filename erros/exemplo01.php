<?php

//programando uma função para ser apresentada no lugar de um erro
function error_handler($code, $message, $file, $line){

	//convertendo em json
	echo json_encode(array(
		"code"=>$code,
		"message"=>$message,
		"file"=>$file,
		"line"=>$line
	));

}

//ativando a função
set_error_handler("error_handler");

//erro intencional
$total = 100 / 0;

?>