<?php namespace {{vendor_name}}\\{{module_name}}Module\Installer;

use Anomaly\Streams\Platform\Stream\StreamInstaller;

class {{module_name}}StreamInstaller extends StreamInstaller
{

    protected $stream = '{{toLowerCase module_name}}';

    protected $assignments = [
        'simple_text'    => [
            'required' => true,
            'label'    => 'Simple Text'
        ],
        'example_select' => []
    ];

}
