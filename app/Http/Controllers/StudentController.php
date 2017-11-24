<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\View\View;

class StudentController extends Controller
{
public function getStudentData($student_no){
    return View::make('score',['student_no'=>$student_no,'subject'=>null]);
}
public function getStudentScore($student_no,$subject =null){
    return View::make('score',['student_no'=>$student_no,'subject'=>null]);
}
}
