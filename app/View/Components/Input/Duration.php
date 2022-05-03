<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class Duration extends Component
{
    public $duration;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($duration = null)
    {
        $this->duration  = $duration;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.duration');
    }
}
