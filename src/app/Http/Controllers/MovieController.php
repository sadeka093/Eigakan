<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Fetch all rows
        return view('movies.index', compact('movies'));
    }
}
