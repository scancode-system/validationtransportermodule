<?php

return [
    'name' => 'ValidationTransporter', 
    'fields' => ['id', 'name'],
	'sample' => [
		[
			'name' => 'id',
			'observation' => 'Código da transportadora.',
			'filled' => false
		], 
		[
			'name' => 'name',
			'observation' => 'Nome da transportadora.',
			'filled' => true
		]
	]
];
