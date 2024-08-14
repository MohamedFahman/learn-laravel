<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    public function create(){
            student::create([
                'name' => request('name'),
                'email' => request('email'),
                'address' => request('address'),
            ]);

            return redirect('/students');
    }

    public function index(){
            return view('students.view', ['students' => student::paginate(6)]);
    }

    public function show($id){
            $student = \App\Models\Student::findOrFail($id); // Find the student by ID or return a 404 if not found
            return view('students.find', [
                'student' => $student
            ]);
    }

    public function edit($id){
            $student = student::find($id);
            return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id){
            request()->validate([
                'name' => 'required',
                'email' => 'required',
                'address' => 'required',
            ]);
            $student = student::findorFail($id);
            $student->name = request('name');
            $student->email = request('email');
            $student->address = request('address');
            $student->save();

            return redirect('/student/' . $student->id);
    }

    public function destroy($id){
            $student = student::findorFail($id);
            $student->delete();
            return redirect('/students');
    }
}
