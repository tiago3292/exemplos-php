<?php

//converte uma string para timestamp

//$ts = strtotime("2001-09-11");
//$ts = strtotime("now");
//$ts = strtotime("+1 day");
$ts = strtotime("+1 week");

//usando o conversor de timestamp como parametro da função date
echo date("l, d/m/Y", $ts);

?>