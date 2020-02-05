<?php

//"se o usuario passou o id, manténha. se não, traga o 1"
$id = (isset($_GET["id"]))?$_GET["id"]:4;

//criando conexão mysql (legado)
$conn = mysqli_connect("localhost", "root", "", "dbphp7");

//criando consulta
$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

//criando variável de conexão query
$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {

	var_dump($resultado);

}

?>