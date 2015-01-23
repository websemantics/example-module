<?php namespace {{namespace}}Installer;

use Anomaly\Streams\Platform\Field\FieldInstaller;

class {{module_name}}FieldInstaller extends FieldInstaller
{

    protected $fields = [
        'simple_text'    => 'text',
        'example_select' => [
            'type'   => 'select',
            'config' => [
                'options' => [
                    'foo' => 'Foo',
                    'bar' => 'Bar'
                ]
            ]
        ]
    ];

}
