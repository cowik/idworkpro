<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobSeekersController extends Controller
{
    public function index(){
        return view('jobseekers/jobseekers');
    }
}
