<?php

$a = NULL;

$b = 8;

$c = 10;

// ??: "se não, (se for nulo),"

echo $a ?? $b ?? $c;
//"imprima o $a, se não existir (ou for nulo), imprima $b. se não existir (ou for nulo), imprima $c".

?>