<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Validation;

class InsertValidationTransporter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Validation::create([
                'alias' => 'transportadora',
                'module_name' => 'ValidationTransporter',
                'module_alias' => 'validationtransporter',
                'video' => 'https://www.youtube.com/watch?v=sd5Rd4LRGgs&t=34s',
                'file' => 'transportadora.xlsx',
                'validation' => 'transporter', 
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Validation::where('module_name', 'ValidationTransporter')->first()->delete();
    }
}
