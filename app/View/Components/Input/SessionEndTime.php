<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class SessionEndTime extends Component
{
    public $timeend;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($timeend =null)
    {
        $this->timeend = $timeend;
    }
  
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.session-end-time');
    }
}
