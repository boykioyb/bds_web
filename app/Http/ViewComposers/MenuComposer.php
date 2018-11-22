<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class MenuComposer
{
    private $menu = [
        [
            'name' => 'menu.home',
            'route' => 'home',
            'child' => []
        ],
        [
            'name' => 'menu.introduction',
            'route' => 'home',
            'child' => []
        ],
        [
            'name' => 'menu.project',
            'route' => 'home',
            'child' => []
        ],
        [
            'name' => 'menu.news',
            'route' => 'home',
            'child' => []
        ],
        [
            'name' => 'menu.contact',
            'route' => 'home',
            'child' => []
        ],
    ];
    public function compose(View $view){
        $view->with('menus',$this->menu);
    }
}
