<?php

namespace Elcomware\ReportMaster\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    //public string $label;
    // public string $icon;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //$this->label = $label;
        //$this-$this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('reportmaster::components.button');
    }
}
