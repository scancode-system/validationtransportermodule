<?php

namespace Modules\ValidationTransporter\Validator;

use Modules\Portal\Imports\ValidatorImport;
use Modules\Portal\Rules\NotInCustomRule;

class TransporterValidator extends ValidatorImport
{

	protected $required = ['codigo', 'descricao'];

	public function rule($data){
		return [
			'codigo' 		=>	['filled', 'integer', 'min:1',  new NotInCustomRule($this->chunkColumn('codigo', 0, $this->row_index-2), 'Duplicado')],
			'descricao' 	=>	['filled', 'string', 'max:255',  new NotInCustomRule($this->chunkColumn('descricao', 0, $this->row_index-2), 'Duplicado')]
		];
	}
	public function messages(){
		return  [];
	}

}
