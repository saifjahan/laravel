<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class studentcontroller extends Controller
{
    function index(){

       $students = Student::all();
    // dd($students);


          return view('student/index', ['students'=>$students]);
    }
    function create(){
        return view('student/create');
    }
    function store(Request $request){
        $student = new Student();
        $student['name']=$request->input('name');
        $student['email']=$request->input('email');
        $student['phone']=$request->input('phone');

        $student->save();

       return redirect(route('student.index'))->with('msg','successfully Added');
    }
    function destroy(Request $request){
        $student = student::find($request->id);
        $student->delete();
        return redirect(route('student.index'))->with('msg','successfully Deleted');

    }
    function edit(Request $request){
        $student = student::find($request->id);
        return view('student/edit',['student'=>$student]);

    }
    function update(Request $request){
        $student = student::find($request->id);
        $student['name'] = $request->input('name');
        $student['email'] = $request->input('email');
        $student['phon'] = $request->input('phon');
        $student->update();
        return redirect(route('student.index'))->with('msg','successfully update');

    }
}
