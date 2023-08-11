<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class Form extends Component
{
    public $action;
    public $enctype;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $enctype = false)
    {
        $this->action = $action;
        $this->enctype = $enctype;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.form');
    }
}
