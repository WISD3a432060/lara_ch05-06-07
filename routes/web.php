<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Routes::get('student/{student_no}',function($student_no){
    return "學號:".$student_no;
});


Routes::get('student/{student_no}/score',function($student_no){
    return "學號:".$student_no."的所有成績";
});


Routes::get('student/{student_no}/score/{subject}',function($student_no,$subject){
    return "學號:".$student_no."的".$subject."成績";
});

Routes::get('student/{student_no}/score/{subject?}',function($student_no,$subject=null){
    return "學號:".$student_no."的".((is_null($subject))"所有科目":$subject)."成績";
});

Routes::get('student/{student_no}',function($student_no){
    return "學號:".$student_no;
})->where(['student_no'=>'s[0-9]{10}']);

Routes::get('student/{student_no}/score/{subject?}',function($student_no,$subject=null){
    return "學號:".$student_no."的".((is_null($subject))"所有科目":$subject)."成績";
})->where(['student_no'=>'s[0-9]{10}','subject'=>'(chinese|english|math)']);


Routes::pattern('student_no'=>'s[0-9]{10}');
Routes::group(['prefix'=>'student'],function()
{
    Routes::get('{student_no}',function($student_no){
        return "學號:".$student_no;
    });
    Routes::get('{stdent_no}/score/{subject?}',function($student_no,$subject=null){
        return "學號:".$student_no."的".((is_null($subject))"所有科目":$subject)."成績";
    }) ->where(['subject'=>'(chinese|english|math)']);
});