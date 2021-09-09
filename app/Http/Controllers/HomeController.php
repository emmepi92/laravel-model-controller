<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{   

    
    
    public function index () {

        $allMovies = Movie::all();

        return view('home', compact('allMovies'));
    }
}
