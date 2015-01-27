<?php namespace {{vendor_name}}\\{{module_name}}Module\Http\Controller;

use {{vendor_name}}\\{{module_name}}Module\Ui\Form\\{{module_name}}FormBuilder;
use {{vendor_name}}\\{{module_name}}Module\Ui\Table\\{{module_name}}TableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

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
