<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Contact;
class StudentController extends Controller
{
    public function hasOne(){
        $students = Student::with('contact')->get();
        return view('hasOne',compact('students'));
    }
}
