<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class StudentController extends BaseController
{
public function getStudentData($student_no){
    return "學號:".$student_no;
}
public function getStudentScore($student_no,$subject =null){
    return "學號".$student_no."的".((is_null($subject))?"所有科目":$subject)."成績";
}
}
