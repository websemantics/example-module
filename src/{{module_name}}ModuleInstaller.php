<?php namespace {{namespace}};

use Anomaly\Streams\Platform\Addon\Module\ModuleInstaller;

class {{module_name}}ModuleInstaller extends ModuleInstaller
{

    protected $installers = [
        'Anomaly\{{{module_name}}}Module\Installer\{{{module_name}}}FieldInstaller',
        'Anomaly\{{{module_name}}}Module\Installer\{{{module_name}}}StreamInstaller'
    ];

}
