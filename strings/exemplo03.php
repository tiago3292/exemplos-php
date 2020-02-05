<?php

$empresa = "Stonks";

//troca um um valor inicial por um outro valor estipulado (o que vc quer trocar, pelo que vc quer trocar e qual é a variável)
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("s", "$", $empresa);

echo "$empresa";

?>