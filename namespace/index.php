<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Seu Cuca");
$cad->setEmail("tomasturbano@kk.xd");
$cad->setSenha("69420666");

$cad->registrarVenda();

?>