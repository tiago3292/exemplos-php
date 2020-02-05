<?php

//inserindo supergobal(variável disponível em todos os escopos) para pegar todas as variáveis recebidas por uma url
//(int) está convertendo o valor recebido via $_GET em número inteiro (resultados do $_GET são recebidos em string por padrão)
//$nome = (int)$_GET["a"];

//var_dump($nome);

//pegando informação do hambiente(usuário x servidor)
//no exemplo abaixo, a variável mostrará o nome do arquivo
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>