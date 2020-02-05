<?php
//arquivo que será feito o download
$link = "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSDMKtLl_m_x3I9iG0U3iKUzQU7rmzB-lgaJZ_BUU3twRmixeJL";

//lê o binário (conteúdo) do arquivo.
$content = file_get_contents($link);

//interpreta o conteúdo binário e tranforma em arquivo real
$parse = parse_url($link);

//pega apenas a informação "path" do conteúdo
$basename = basename($parse["path"]);

//abre um arquivo. "w+" cria um arquivo
$file = fopen($basename, "w+");

//escreve dentro de um arquivo
fwrite($file, $content);

//fecha o arquivo
fclose($file);

?>

<?//mostra na tela a imagem do arquivo baixado?>
<img src="<?=$basename?>">