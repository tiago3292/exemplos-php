<?php

$nome = "abc1";

$nome2 = 'abc2';

//var_dump($nome, $nome2);

//aspas simples são interpretadas como texto. aspas duplas é verficado qual tipo do conteúdo antes da impressão (interpolação de variável)
echo "ABC $nome" . 'ABC $nome';

?>