<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $tasks = Auth::user()->tasks;
            return view('home.index', ['tasks' => $tasks]);
        } 
        else {
            return view('home.index');
        }
    }
}
