<?php

namespace Modules\ValidationTransporter\Validator;

use App\Imports\ValidatorImport;

class TransporterValidator extends ValidatorImport
{


	public function rule($data){
		return [
			'codigo' 		=>	'present|integer|min:1|unique_custom_values:codigo',
			'descricao' 	=>	'required|string|max:255|unique_custom_values:descricao'
		];
	}

}
