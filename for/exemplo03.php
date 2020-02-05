<?php

//cria uma caixa de seleção HTML
echo "<select>";

//"para cada vez que o $i(tendo o valor do ano atual) for maior ou igual ao ano atual - 100, subtraia $i por 1"
for ($i=date("Y"); $i >= date("Y")-100 ; $i--) { 
	
	echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>"

?>