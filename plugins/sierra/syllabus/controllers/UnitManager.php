<?php namespace Sierra\Syllabus\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class UnitManager extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController',
    'Backend\Behaviors\RelationController',
        
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'manage_syllabus' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Sierra.Syllabus', 'main-menu-item', 'syllabus_Units');
    }
}