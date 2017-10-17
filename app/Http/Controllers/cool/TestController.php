<?php

namespace App\Http\Controllers\cool;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\controller;
class TestController extends BaseController
{
    public function index()
    {
        return 'Cooler';
    }
    
}
