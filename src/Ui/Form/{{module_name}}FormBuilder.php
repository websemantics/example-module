<?php namespace {{vendor_name}}\\{{module_name}}Module\Ui\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class {{module_name}}FormBuilder extends FormBuilder
{

    protected $model = '{{vendor_name}}\\{{module_name}}Module\\{{module_name}}\\{{module_name}}Model';

    protected $fields = [
        '*',
        'test' => [
            'label'        => 'Test Input',
            'instructions' => 'This is a test input you can mess with a bit.',
            'type'         => 'markdown',
            'config'       => [
                'separator' => '5'
            ]
        ]
    ];

    protected $actions = ['save'];

}