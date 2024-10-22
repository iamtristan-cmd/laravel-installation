<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
class ResumeController extends Controller
{
    public function index (){
        $resume = Resume::find(1);
        return view('resume',compact('resume'));

    }
}
