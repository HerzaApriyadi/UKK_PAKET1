<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\BookController;

class BookController extends Controller
{
    public function index()
    {
        return view('buku');
    
    }
}
