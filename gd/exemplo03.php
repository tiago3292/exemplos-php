<?php

//criando imagem a partir de uma imagem já criada
$image = imagecreatefromjpeg("smug1.jpg");

//criando paleta de cores
$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

//configurando fonte da letra
imagettftext($image, 32, 0, 320, 250, $titlecolor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "viadexkk");

imagettftext($image, 32, 0, 375, 350, $titlecolor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "viadexkk");


imagestring($image, 5, 440, 370, utf8_encode("gaykk ").date("d/m/Y"), $titlecolor);

//configurando cabeçalho
header("Content-type: image/jpeg");

//ativando função
imagejpeg($image);

//destruindo alocação
imagedestroy($image);

?>