<?php

//"se o usuario passou o id, manténha. se não, traga o 1"
$id = (isset($_GET["id"]))?$_GET["id"]:4;

//"se não for numérico, ou se a string for maior do que 5 caractéres, pare o código."
if (!is_numeric($id) || strlen($id) > 5) {
	exit("haa safadin :^3");
}

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