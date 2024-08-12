<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function viewWelcome(){
        
        return view('welcome');
    }

    public function addStudent(Request $request){
        // dd($request->all());
        Student::create($request->all());
        return redirect()->route('regForm')->with('message', 'Registertion is suceessful');
    }

    public function viewAddStudent(){
        $students = Student::all();
        return view('student-reg', compact('students'));
    }
}
