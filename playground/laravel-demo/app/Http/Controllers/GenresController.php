<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Genre;
use App\Http\Controllers\Controller;

class GenresController extends Controller
{
    /**
     * Shos a list of films for this genre
     * @param Genre $genre
     * @return mixed
     */
    public function show(Genre $genre)
    {
        $films = $genre->films;

        return view('genres.show', compact('films'), compact('genre'));
    }
}
