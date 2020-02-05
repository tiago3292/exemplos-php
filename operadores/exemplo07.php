<?php

$a = 10;

//soma +1 ao valor já existente (neste exemplo, o echo imprimiu o valor de $a e SÓ DEPOIS incrementou +1. para que o incremento seja realizado ANTES do echo, é necessário adicionar o ++ antes da chave/variável.)
echo $a++;

echo "<br>";

echo $a;

echo "<br>";

//decrementa -1 do valor atual. como o operador está antes da chave/variável, a alteração aparecerá no echo
echo --$a;

?>