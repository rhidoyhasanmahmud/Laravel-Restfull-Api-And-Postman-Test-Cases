<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // Create Value
    public function create(Request $request){
        $students = new Student();
        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');
        $students->save();
        return response()->json($students);
    }
    // Read Values
    public function show(){
        $students = Student::all();
        return response()->json($students);
    }
    // Read Single Value
    public function showbyId($id){
        $students = Student::find($id);
        return response()->json($students);
    }
    // Update Value
    public function update(Request $request, $id){
        $students = Student::find($id);
        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');
        $students->save();
        return response()->json($students);
    }
    // Delete Value
    public function deletebyId(Request $request, $id){
        $students = Student::find($id);
        $students->delete();
        return response()->json($students);
    }
}
