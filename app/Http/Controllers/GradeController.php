<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;
use App\Grade;

class GradeController extends Controller
{
    public function index(Subject $subject,Grade $grade)
    {
        return view('categories/indexgrade')->with(['posts' => $grade->getByGrade()])->with(['grades' => $grade->get()])->with(['subjects' => $subject->get()]);
    }
}
