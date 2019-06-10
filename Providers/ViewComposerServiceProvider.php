<?php

namespace Modules\ValidationTransporter\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider {

    public function boot() {
        View::composer('validationtransporter::documentation', 'Modules\Portal\Http\ViewComposers\Parameters\ClientValidationComposer');
    }

    public function register() {}

}
