<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

class civic implements Veiculo {

	public function acelerar($velocidade) {

		echo "O veículo acelerou até".$velocidade." km/h";

	}

	public function frenar($velocidade) {

		echo "O veículo frenou até".$velocidade." km/h";

	}

	public function trocarMarcha($marcha) {

		echo "o veículo engatou a marcha ".$marcha;

	}

}

$carro = new Civic();

$carro->trocarMarcha(1);

?>