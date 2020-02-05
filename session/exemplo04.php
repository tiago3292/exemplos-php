<?php

//usando um id pré definido (exemplo de session hijack)
session_id("ce9344h5svdibkm62kk2dl8u2g");

//exigindo o arquivo config.php
require_once("config.php");

//gerando novamente um id se sessão
session_regenerate_id();

//exibindo a função de id (gerado novamente pela função session_regenerate_id())
echo session_id();

//visualizando o array da sessão
var_dump($_SESSION);

?>