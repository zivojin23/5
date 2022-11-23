<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Project;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'user' => Auth::user()
        ]);
    }

    public function myprojects()
    {
        return view('my-projects', [
            'user'  => Auth::user(),
        ]);
    }

    public function employees()
    {
        return view('employees', [
            'user'  => Auth::user(),
        ]);
    }

    public function roles()
    {
        return view('roles', [
            'user'  => Auth::user(),
        ]);
    }

    public function countries()
    {
        return view('country', [
            'user'  => Auth::user(),
        ]);
    }

    public function cities()
    {
        return view('city', [
            'user'  => Auth::user(),
        ]);
    }
}
