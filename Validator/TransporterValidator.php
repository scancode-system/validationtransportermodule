<?php

namespace Modules\ValidationTransporter\Validator;

use Modules\Portal\Imports\ValidatorImport;

class TransporterValidator extends ValidatorImport
{

	protected $required = ['codigo', 'descricao'];

	public function rule($data){
		return [
			'codigo' 		=>	'filled|integer|min:1|unique_custom_values:codigo',
			'descricao' 	=>	'filled|string|max:255|unique_custom_values:descricao'
		];
	}

}
