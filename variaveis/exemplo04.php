<?php

///exemplo do escopos///

$nome = "abc";

//escopo 1 
function teste() {

	//sem a palavra-chave "global", a função não notaria a existência da variável "$nome" -- por estar fora do escopo -- resultando em um erro.
	global $nome;
	echo $nome;
	//pulando linha
	echo "<br>";
}

//escopo 2
function teste2() {

	//esta variável tem o mesmo nome da anterior mas nenhum erro ocorre porque essa variável existe apenas dentro deste escopo
	$nome = "cba";

	echo $nome." kkkxd";

}

//imprimindo funções na tela
teste();

teste2();

?>