<?php

abstract class Animal {

	public function falar(){

		return "Som";

	}

	public function mover(){

		return "Anda";

	}

}

class Cachorro extends Animal {

	public function falar(){

		return "Late";

	}

}

class Gato extends Animal {

	public function falar(){

		return "Mia";

	}

}

class Passaro extends Animal {

	public function falar(){

		return "Canta";

	}

	public function mover(){

		return "Voa e ".parent::mover();
	}

}

$pluto = new Cachorro();

echo $pluto->Falar()."<br>";
echo $pluto->mover()."<br>";

echo "----------"."<br>";

$gato = new Gato();

echo $gato->Falar()."<br>";
echo $gato->mover()."<br>";

echo "----------"."<br>";

$ave = new Passaro();

echo $ave->Falar()."<br>";
echo $ave->mover()."<br>";

?>