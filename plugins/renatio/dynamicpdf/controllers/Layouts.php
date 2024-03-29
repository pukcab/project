<?php

namespace Renatio\DynamicPDF\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;
use Renatio\DynamicPDF\Classes\PDF;
use Exception;

/**
 * Class Layouts
 * @package Renatio\DynamicPDF\Controllers
 */
class Layouts extends Controller
{

    /**
     * @var array
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    /**
     * @var array
     */
    public $requiredPermissions = ['renatio.dynamicpdf.manage_layouts'];

    /**
     * @var string
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string
     */
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Renatio.DynamicPDF', 'dynamicpdf', 'layouts');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function previewPdf($id)
    {
        try {
            $this->pageTitle = trans('renatio.dynamicpdf::lang.templates.preview_pdf');
            $model = $this->formFindModelObject($id);

            return PDF::loadLayout($model->code)->stream();
        } catch (Exception $e) {
            $this->handleError($e);
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function html($id)
    {
        $model = $this->formFindModelObject($id);

        return response($model->html);
    }

}