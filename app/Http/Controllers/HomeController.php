<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function myprojects() {
        return view('my-projects');
    }

    public function employees() {
        return view('employees');
    }

    public function roles() {
        return view('roles');
    }

    public function countries() {
        return view('country');
    }

    public function cities() {
        return view('city');
    }

    public function nba() {
        return view('nba');
    }
}
