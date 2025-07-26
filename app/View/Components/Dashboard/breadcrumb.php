<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class breadcrumb extends Component
{
    // 
    public string $heading, $group, $menu, $submenu;  

    /**
     * Create a new component instance.
     */
    public function __construct($heading, $group, $menu, $submenu)
    {
        //
        $this->heading = $heading;
        $this->group = $group;
        $this->menu = $menu;
        $this->submenu = $submenu;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.breadcrumb');
    }
}
