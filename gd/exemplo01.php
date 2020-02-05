<?php

//mudando o tipo de resposta do arquivo
header ("Content-Type: image/png");

//criando a tela e armazenando em uma variável
$image = imagecreate(256, 256);

//adicionando cores
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

//função para escrever na tela
imagestring($image, 5, 60, 120, "kkkxd", $red);

//dizendo qual o formato que deve ser gerado
imagepng($image);

//destruindo variável resource
imagedestroy($image);

?>