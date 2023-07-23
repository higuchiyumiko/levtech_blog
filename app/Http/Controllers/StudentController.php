<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;

class StudentController extends Controller
{
    public function index(Student $student){
     //  $A=Student::get();
     //  dd($A);
     //return view('index');
        return view('index')->with(['students'=>$student->get()]);
    }
    public function create(Subject $subject){
        return view('create')->with(['subjects'=>$subject->get()]);
    }
}
