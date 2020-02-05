<?php

class Pessoa {

	public $nome = "Peganomeu";
	protected $idade = 69;
	private $senha = "69420666";

	public function verDados(){

		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";

	}

}

$objeto = new Pessoa();

//echo $objeto->nome."<br>";

$objeto->verDados();

?>