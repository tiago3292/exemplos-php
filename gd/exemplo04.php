<?php

//criando header
header("Content-type: image/jpeg");

//carregando imagem em uma variável
$file = "smug1.jpg";

//ajustando largura e altura
$new_width = 256;
$new_height = 256;

//pegando o tamanho da imagem
list($old_width, $old_height) = getimagesize($file);

//criando imagem e carregando paleta de cores true color
$new_image = imagecreatetruecolor($new_width, $new_height);

//criando imagem com as dimensões antigas
$old_image = imagecreatefromjpeg($file);

//usando ferramenta de thumbnail
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

//gerando a imagem jpg
imagejpeg($new_image);

//destruindo imagens da memória
imagedestroy($old_image);
imagedestroy($new_image);

?>