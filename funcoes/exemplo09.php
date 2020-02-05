<?php
//exemplo de função recursiva


$hierarquia = array(
	array(
		"nome_cargo"=>"CEO",
		"subordinados"=>array(
			//inicio: diretor comercial
			array(
				"nome_cargo"=>"diretor comercial",
				"subordinados"=>array(
					//inicio: gerente de vendas
					array(
						"nome_cargo"=>"gerente de vendas"
					)
					//termino: gerente de vendas
				)
			),
			//termino: diretor comercial
			//inicio: diretor financeiro
			array(
				"nome_cargo"=>"diretor financeiro",
				"subordinados"=>array(
					//inicio: gerente de contas a pagar
					array(
						"nome_cargo"=>"gerente de contas a pagar",
						"subordinados"=>array(
							//inicio:supervisor de pagamentos
							array(
								"nome_cargo"=>"supervisor de pagamentos"
							)
							//termino: supervisor de pagamentos
						)
					),
					//termino: gerente de contas a pagar
					//inicio: gerente de compras
					array(
						"nome_cargo"=>"gerente de compras",
						"subordinados"=>array(
							//inicio: supervisor de suprimentos
							array(
								"nome_cargo"=>"supervisor de suprimentos"
							)
							//termino: supervisor de suprimentos
						)
					)
					//termino: gerente de compras
				)
			)
			//termino: diretor financeiro
		)
	)
);

//criando função com o parametro $cargos
function exibe($cargos){

	//abrindo tag de coluna HTML
	$html = "<ul>";

	//"para cada item do array $cargos atribuido em $cargo, executar o seguinte comando:"
	foreach ($cargos as $cargo) {
		
		//"concatene tag de coluna com tag de linha"
		$html .= "<li>";

		//"concatene tag de coluna com o elemento e a chave do array"
		$html .= $cargo["nome_cargo"];

		//"se a chave "subordinados" existir no elemento de array $cargo e a quantidade de itens nessa chave for maior que 0,"
		if (isset($cargo["subordinados"]) && count($cargo["subordinados"]) > 0) {

			//"concatene a tag de coluna com a função exibe tendo o elemento de array com a chave "subordinados" como parametro (que é novamente uma lista de cargos)"
			$html .= exibe($cargo["subordinados"]);

		}

		//"concatene a tag de coluna com a tag de fechamento de linha"
		$html .= "</li>";
	}

	//concatenando a tag de coluna com a tag de fechamento de coluna
	$html .= "</ul>";

	return $html;

}

//exibindo a função exibe com a variável $hierarquia como parametro
echo exibe($hierarquia);

?>