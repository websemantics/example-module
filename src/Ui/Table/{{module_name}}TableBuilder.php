<?php namespace {{namespace}}Ui\Table;

use Anomaly\{{namespace}}Module\{{namespace}}\{{namespace}}Model;
use Anomaly\Streams\Platform\Ui\Table\Table;
use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class {{module_name}}TableBuilder extends TableBuilder
{

    protected $model = 'Anomaly\\{{module_name}}Module\\{{module_name}}\\{{module_name}}Model';

    protected $buttons = [
        'edit',
        [
            'type'       => 'danger',
            'text'       => 'Danger Will Robinson!',
            'url'        => 'admin/danger/danger/danger',
            'attributes' => [
                'data-id' => 'entry.id',
            ]
        ]
    ];

    public function __construct(Table $table)
    {
        $this->setColumns(
            [
                'simple_text',
                [
                    'heading' => 'Is this awesome?',
                    'value'   => function ({{module_name}}Model $entry) {
                        if ($entry->isAwesome()) {
                            return 'Sure is.';
                        }

                        return 'Nope.';
                    }
                ]
            ]
        );

        parent::__construct($table);
    }
}
 