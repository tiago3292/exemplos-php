<?php

//exemplo de erro de lógica, resultando num loop infinito

//"para cada vez que $i for menor do que 10, SUBTRAIA o valor de $i por 1"
for ($i=0; $i < 10; $i--) { 
	
	echo $i . " ";
}

?>