<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Grade;

use App\Subject;

class UserController extends Controller
{
    //
    public function index(User $user,Grade $grade, Subject $subject)
    {
        return view('user.index')->with(['posts' => $user->getOwnPaginateByLimit()])->with(['grades' => $grade->get()])->with(['subjects' => $subject->get()]);
    }
}
