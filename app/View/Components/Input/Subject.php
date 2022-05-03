<?php

namespace App\View\Components\Input;

use App\Models\SubjectMaster;
use Illuminate\View\Component;

class Subject extends Component
{
    public $subjects;
    public $subject_id;
    public $subject_name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subject_id = null)
    {
        $this->subjects = SubjectMaster::all();
        $this->subject_name = SubjectMaster::find($subject_id)->name ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.subject');
    }
}
