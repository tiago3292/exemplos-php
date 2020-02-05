<?php

//chave de inicio, aonde termina, ação q será tomada até o alcance do término

//"se $i for menor que 1000, adicione +5 e refaça o procedimento"
for ($i = 0; $i < 1000; $i += 5) {

	//"se $i for maior ou igual a 200 e se $i for menor ou igual a 800, ignore."
	if ($i >= 200 && $i <= 800) continue;

	//"se $i for identico a 900, pare."
	if ($i === 900) break;

	echo $i . "<br>";
}

?>