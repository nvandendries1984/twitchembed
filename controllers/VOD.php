<?php namespace NielsVanDenDries\Twitchembed\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class VOD extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'vod' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Twitchembed', 'main-menu-item', 'side-menu-item2');
    }
}
