<?php namespace {{namespace}};

use Illuminate\Support\ServiceProvider;

class {{module_name}}ModuleServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->make('router')->get(
            'admin/{{toLowerCase module_name}}',
            'Anomaly\{{module_name}}Module\Http\Controller\{{module_name}}Controller@index'
        );
        $this->app->make('router')->get(
            'admin/{{toLowerCase module_name}}/create',
            'Anomaly\{{module_name}}Module\Http\Controller\{{module_name}}Controller@create'
        );
    }
}
