<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;
use App\Grade;

class SubjectController extends Controller
{
    public function index(Subject $subject,Grade $grade)
    {
        return view('categories/indexsubject')->with(['posts' => $subject->getBySubject()])->with(['grades' => $grade->get()])->with(['subjects' => $subject->get()]);
    }
}
