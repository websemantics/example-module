<?php namespace {{vendor_name}}\\{{module_name}}Module;

use Anomaly\Streams\Platform\Addon\Module\ModuleInstaller;

class {{module_name}}ModuleInstaller extends ModuleInstaller
{

    protected $installers = [
        '{{vendor_name}}\\{{module_name}}Module\Installer\\{{module_name}}FieldInstaller',
        '{{vendor_name}}\\{{module_name}}Module\Installer\\{{module_name}}StreamInstaller'
    ];

}
