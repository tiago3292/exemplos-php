<?php

//função: "se variável não for preenchida, mostre um erro"
function trataNome($name){

	if (!$name) {

		throw new Exception("kd o nome carai? ", 420);
		

	}

	echo ucfirst($name)."<br>";

}

//"tente executar"
try {

	//função preenchida corretamente
	trataNome("murissoca");
	//função sem preenchimento para engatilhar erro
	trataNome("");

} catch(Exception $e) {
	//"se der erro, mostre a seguinte mensagem"
	echo $e->getMessage();

} /*esse código sempre será executado no final */ finally {

	echo "qualquer duvida entrar em contato com o email: kkk@xd.rs";

}

?>