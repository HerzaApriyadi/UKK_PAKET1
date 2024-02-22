<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\DashboardController;

class DashboardController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }
}
