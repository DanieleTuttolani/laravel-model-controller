<?php

namespace App\Http\Controllers;

use  App\Models\Movie;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function Film()
    {
        $movies = Movie::all();
 
        return view('welcome' , compact('movies'));
    }
}
