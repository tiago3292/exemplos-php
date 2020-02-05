<?php

//criando uma classe (por convenção, nome das classes começam com letra maiúsculas. o mesmo serve para palavras compostas)
class Pessoa {

	public $nome;//atributo

	public function falar(){//método

		//retornando uma string e acessando o atributo(quando um atributo fora do método é refenciado, usamos o $this->atributo. com ele dentro do método, usar apenas $atributo.)
		return "o meu nome é".$this->nome;

	}

}

//instanciando a classe (new é uma instrução utilizada para instanciar uma classe)
$seucuca = new Pessoa();

//referenciando um atibuto e inserindo um valor nele
$seucuca->nome = " seu cuca";

//exibindo o objeto e referenciando um método (função dentro de uma classe)
echo $seucuca->falar();

?>