<?php

//desabilitando o notice do php
error_reporting(E_ALL & ~E_NOTICE);

//criando um notice
$nome = $_GET["nome"];

echo $nome;

?>