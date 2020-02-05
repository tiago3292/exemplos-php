<?php

class Documento {

	private $numero;

	public function GetNumero(){

		return $this->numero;

	}

	public function setNumero($n){

		$this->numero = $n;

	}

}

class CPF extends Documento {

	public function validar():bool{

		$numeroCPF = $this->getNumero();

		//validacao do CPF

		return true;

	}

}

$doc = new CPF();

$doc->setNumero("111.222.333-44");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();

?>