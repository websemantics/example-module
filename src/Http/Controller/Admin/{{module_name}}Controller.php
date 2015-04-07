<?php namespace {{vendor_name}}\\{{module_name}}Module\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;

class {{module_name}}Controller extends AdminController
{

 /**
   * Return master admin view.
   *
   * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
   */
  public function index()
  {
       return view('{{toLowerCase vendor_name}}.module.{{toLowerCase module_name}}::admin.master');
  }

}
