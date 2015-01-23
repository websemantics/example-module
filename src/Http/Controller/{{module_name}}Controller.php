<?php namespace {{namespace}}Http\Controller;

use {{namespace}}Ui\Form\{{module_name}}FormBuilder;
use {{namespace}}Ui\Table\{{module_name}}TableBuilder;
use {{namespace}}Platform\Http\Controller\AdminController;

class {{module_name}}Controller extends AdminController
{

    public function index({{module_name}}TableBuilder $table)
    {
        return $table->render();
    }

    public function create({{module_name}}FormBuilder $form)
    {
        return $form->render();
    }
}
