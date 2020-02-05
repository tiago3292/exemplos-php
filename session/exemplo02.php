<?php

//exigindo o arquivo config.php
require_once("config.php");

//apagando uma variável de sessão
session_unset($_SESSION["nome"]);

//exibindo a chave "nome" da sessão
echo $_SESSION["nome"];

?>