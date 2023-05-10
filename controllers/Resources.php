<?php namespace NielsVanDenDries\Twitchembed\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Resources extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'resources' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Twitchembed', 'main-menu-item', 'side-menu-item3');
    }
}
