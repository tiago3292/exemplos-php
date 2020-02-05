<?php
//variavel com o numero do cep
$cep = "01310100";

//variavel com o link da conexão
$link = "https://viacep.com.br/ws/$cep/json/";

//inicia conexão
$ch = curl_init($link);

//configura a conexão
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//comando de execução dentro de uma variável
$response = curl_exec($ch);

//encerra conexão
curl_close($ch);

//converte json em array
$data = json_decode($response, true);

//imprime o código na tela. use "[]" para ver apenas um dado específico
print_r($data["uf"]);

?>