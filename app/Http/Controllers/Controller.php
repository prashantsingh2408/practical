<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Models\SubjectMaster;
use App\Models\FacultyTimeTable;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // subject
    public function AddSubject(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'subject_name' => 'required|max:200',
                'term_id' => 'required'
            ]);
            SubjectMaster::Create([
                'subject_name' => $request->subject_name,
                'term_id' => $request->term_id
            ]);
            return back()->with('success', 'Subject Added Successfully');
        }
        return view('add-subject',
        [
            'term_names' => $this->getTermsNameArray(),
        ]);
    }
    private function shiftNameCol($terms){
        $new_terms = [];
        foreach($terms as $term){
            $new_terms[] = array_shift($term);
        }
        return $new_terms;
    }

    public function ViewListSubject(){
        return view('view-subject',
        [
            'subjects' => SubjectMaster::all()
        ]);
    }

    // faculty
    public function AddFaculty(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'name' => 'required|max:200',
                'email' => 'required|email|max:200'
            ]);
            Faculty::Create([
                'name' => $request->name,
                'email' => $request->email
            ]);
            return back()->with('success', 'Faculty Added Successfully');
        }
        return view('add-faculty',
        [
            'faculties' => Faculty::all() 
        ]);
    }

    public function AddFacultyTimeTable(Request $request){
        if($request->isMethod('post')){
            // $request->validate([
            //     'faculty_id' => 'required',
            //     'subject_id' => 'required',
            //     'date' => 'required',
            //     'session_start_time' => 'required',
            //     'session_end_time' => 'required',
            //     'duration' => 'required'
            // ]);
            // dd($request->all());
            if($request->i == 2){
                FacultyTimeTable::truncate();
            }
            FacultyTimeTable::Create([
                'faculty_id' => $request->faculty_id,
                'subject_id' => $request->subject_id,
                'date' => $request->date,
                'session_start_time' => $request->session_start_time,
                'session_end_time' => $request->session_end_time,
                'duration' => $request->duration
            ]);
            return back()->with('success', 'Faculty Time Table Added Successfully');
            
            return back()->with('success', 'Faculty Time Table Added Successfully');
        }
        return view('add-faculty-time-table',
        [
            'faculty_time_tables' => FacultyTimeTable::all(),
        ]);
    }
    public function getTermsNameArray(){
        return $this->shiftNameCol(Term::all()->shift()->name);
    }
}
