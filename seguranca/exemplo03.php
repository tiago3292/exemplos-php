<?php

/*significado dos números de permissão
0 = sem nenhuma permissão
1 = permissão de execução
2 = permissão de gravação
3 = permissão de execução e gravação
4 = somente leitura
5 = leitura e execução
6 = leitura e gravação
7 = leitura, execução e gravação

significado da sequência dos números (depois do 0)
primeiro = refere-se ao dono
segundo = grupos de usuários
terceiro = outros (guests)*/

$pasta = "arquivos";
$permissao = "0775";

//"se não existir pasta com nome "arquivos", crie uma."
if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "pasta criada";

?>