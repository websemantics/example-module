<?php namespace {{namespace}}Installer;

use Anomaly\Streams\Platform\Stream\StreamInstaller;

class {{module_name}}StreamInstaller extends StreamInstaller
{

    protected $stream = 'examples';

    protected $assignments = [
        'simple_text'    => [
            'required' => true,
            'label'    => 'Simple Text'
        ],
        'example_select' => []
    ];

}
