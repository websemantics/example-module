<?php namespace {{vendor_name}}\\{{module_name}}Module;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class {{module_name}}ModuleServiceProvider extends AddonServiceProvider
{

    protected $routes = [
    'admin/{{toLowerCase module_name}}' => '{{vendor_name}}\\{{module_name}}Module\Http\Controller\Admin\\{{module_name}}Controller@index'
    ];

}