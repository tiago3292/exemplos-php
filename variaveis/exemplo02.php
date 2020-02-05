<?php

//criando variável
$nome1 = "joao";
$sobrenome = "jamel";

//usando concatenação (criando variável cujo valor é a concatenação entre outras duas variáveis[concatenação de aspas no exemplo é só a adição de um espaço])
$nomeCompleto = $nome1." ".$sobrenome;

//imprimindo variável na tela
echo $nomeCompleto;

//parando toda a leitura do php do "exit" para baixo
exit;

//pulando uma linha
echo "<br>";

//imprimindo variável na tela
echo $nome1;

//pulando uma linha
echo "<br>";

//limpando variável (pode limpar mais de um valor de uma vez se for separado entre virgulas)
unset($nome1);

//fazendo uma validação da variável ("se a variável existe, imprima na tela")
if (isset($nome1)) {

//imprimindo valor atual da varável após o unset
echo $nome1;

}



?>