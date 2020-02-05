<?php

//convertendo um string em 16bits
define("SECRET_IV", pack("a16", "senha"));
define("SECRET", pack("a16", "senha"));

//array com chave e valor
$data = [
	"nome"=>"josival"
];

//encriptando string, selecionando algoritmo (sem constante pré-definida), passando chave, usando numero inteiro e segunda chave(senha)
$openssl = openssl_encrypt (
	json_encode($data),
	"AES-128-CBC",
	SECRET,
	0,
	SECRET_IV
);

echo $openssl;

//decriptando
$string = openssl_decrypt (
	$openssl,
	"AES-128-CBC",
	SECRET,
	0,
	SECRET_IV	
);

echo "<br>";
var_dump(json_decode($string, true));
?>