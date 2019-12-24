<?php

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					array(
						'nome_cargo' => 'Gerente de vendas'
					)
				)
			),
			array(
				'nome_cargo' => 'Diretor financeiro',
				'subordinados' => array(
					array(
						'nome_cargo' => 'Gerente de contas a pagar',
						'subordinados' => array(
							array(
								'nome_cargo' => 'Supervisor de pagamentos'
							)
						)
					),
					array(
						'nome_cargo' => 'Gerente de compras',
						'subordinados' => array(
							array(
								'nome_cargo' => 'Supervisor de suprimentos',
								'subordinados' => array(
									array(
										'nome_cargo' => 'Comprador'
									)
								)
							)
						)
					)
				)
			)
		)
	)
);

function exibe($cargos) {
	$html = "<ul>";
	foreach ($cargos as $key => $cargo) {
		$html .= "<li>";
			$html .= $cargo['nome_cargo'];
			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
				$html .= exibe($cargo['subordinados']);
			}
		$html .= "</li>";
	}
	$html .= "</ul>";

	return $html;
}

echo exibe($hierarquia);

?>