<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
public function get_student(){
//get data from db
$student=Student::all();
return view('students.index', compact('student'));
 }
public function add_student(Request $request){
//validation
$request->validate([
    'name'=>'required',
    'email'=>'required|email|unique:students,email',
    'phone'=>'required',
    'age'=>'required|integer|min:1|max:120'
]);
//store in db
Student::create([
    'name'  => $request->name,
    'email' => $request->email,
    'phone' => $request->phone,
    'age'   => $request->age
    ]);
    return redirect('students/index');
}
public function edit_student( $id){
    $student= Student::findOrFail($id);
    return view('students.edit',compact('student'));
}
public function update_student(Request $req , $id){
$student= Student::findOrFail($id);
    $student->update($req->all());
    return redirect('students/index');
}
public function destroy($id){
$student = Student::findOrFail($id);
$student->delete();
    return redirect('students/index');


}

}
