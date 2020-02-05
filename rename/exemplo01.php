<?php

//variáveis com os nomes das pastas para serem criadas
$dir1 = "folder01";
$dir2 = "folder02";

//"se não houver as pastas folder01 e 02, crie as pastas folder01 e 02"
if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

//variável com o nome do arquivo
$filename = "README.txt";

//"se não existir este arquivo na pasta folder01"
if (!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)) {

	//cria o arquivo
	$file = fopen($dir1.DIRECTORY_SEPARATOR.$filename, "w+");

	//escreve no arquivo
	fwrite($file, date("Y-m-d H:i:s"));

	//fecha o arquivo
	fclose($file);

}

//renomeia o caminho do arquivo (move) ou o nome do arquivo
rename($dir1.DIRECTORY_SEPARATOR.$filename,//origem
	$dir2.DIRECTORY_SEPARATOR.$filename//destino
);

echo "arquivo movido";

?>