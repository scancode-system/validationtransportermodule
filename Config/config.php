<?php

return [
	'name' => 'ValidationTransporter', 
	'fields' => ['id', 'name'],
	'sample' => [
		[
			'name' => 'id',
			'observation' => 'Código da transportadora.',
			'sample_1' => '12',
			'filled' => false
		], 
		[
			'name' => 'name',
			'observation' => 'Nome da transportadora.',
			'sample_1' => 'hiper X',
			'filled' => true
		]
	]
];
