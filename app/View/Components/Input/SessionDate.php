<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class SessionDate extends Component
{
    public $time;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($time=null)
    {
        $this->time = $time;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.session-date');
    }
}
