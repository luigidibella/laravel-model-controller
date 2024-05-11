<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        //SELECT * from movies
        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function title(){

        $movies = Movie::all()
            ->sortBy('title');

        return view('title', compact('movies'));
    }

    public function date(){

        $movies = Movie::all()
            ->sortBy('date');

        return view('date', compact('movies'));
    }

    public function vote(){

        $movies = Movie::all()
            ->sortByDesc('vote');

        return view('vote', compact('movies'));
    }
}
