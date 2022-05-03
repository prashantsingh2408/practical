<?php

namespace App\View\Components\Input;

use App\Models\Faculty as FacultyModel;
use Illuminate\View\Component;

class Faculty extends Component
{
    public $faculties;
    public $faculty_id;
    public $faculty_name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($faculty_id = null)
    {
        $this->faculties = FacultyModel::all();
        $this->faculty_name = FacultyModel::find($faculty_id)->name ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.faculty');
    }
}
