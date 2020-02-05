<?php

//usando a classe de representação de data e hora. possui mais recursos do que a função
$dt = new DateTime();

//usando -> para acessar um método
echo $dt->format("d/m/Y H:i:s");

?>