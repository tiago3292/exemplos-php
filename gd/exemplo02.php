<?php

//criando imagem a partir de uma imagem já criada
$image = imagecreatefromjpeg("smug1.jpg");

//criando paleta de cores
$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

//escrevendo na imagem
imagestring($image, 5, 450, 150, "gaykk", $titlecolor);
imagestring($image, 5, 440, 350, "gaykk", $titlecolor);

//incluindo utf para que acentos funcionem
imagestring($image, 5, 440, 370, utf8_encode("gaykk ").date("d/m/Y"), $titlecolor);

//configurando cabeçalho
header("Content-type: image/jpeg");

//ativando função
imagejpeg($image, "kkxd".date("Y-m-d").".jpg", 10);

//destruindo alocação
imagedestroy($image);

?>