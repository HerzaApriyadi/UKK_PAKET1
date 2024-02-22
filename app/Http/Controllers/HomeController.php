<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        $role = auth()->user();
        if ($role == 1){
            return view('admin');
        }
        if ($role == 1){
            return view('admin');
        }
        if ($role == 1){
            return view('admin');
        }
         else {
            return view ('home');
         }   
    }

    }

