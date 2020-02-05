<?php

//colocando um código json em uma variável
$json = '[{"nome":"jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

//decodificando o json da $data
$data = json_decode($json, true);

//imprimindo a array
var_dump($data);

?>