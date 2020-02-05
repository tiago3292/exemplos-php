<?php

//o que estiver aqui dentro, o try TENTARÁ executar
try {

	//erro proposital
	throw new Exception("Erro", 69);
	

}/*"caso dê algum erro...*/ catch (Exception $e) {

	echo json_encode(array (
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));

}

?>