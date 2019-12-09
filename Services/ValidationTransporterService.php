<?php

namespace Modules\ValidationTransporter\Services;


class ValidationTransporterService {
	
	public function fields(){
		return config('validationtransporter.fields');
	}

	public function sample(){
		return config('validationtransporter.sample');
	}

}
