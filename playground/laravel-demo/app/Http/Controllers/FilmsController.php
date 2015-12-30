<?php
namespace App\Http\Controllers;

use App\Film;
use App\Http\Requests\FilmRequest;
use App\Http\Controllers\Controller;
use Auth;
use App\Genre;

class FilmsController extends Controller
{
    /**
     * FilmsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'index']]);
    }


    /**
     * Shows film index page
     * @param null $filter
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($filter = null)
    {
        // If we're passing a filter for who's watched things
        if ($filter) {
            $films = Film::WhoNotWatched($filter)->get();
        } else {
            $films = Film::all();
        };
        return view('films.index', compact('films'));
    }


    /**
     * @param Film $film
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    /**
     * Shows the page to add a film
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $genres = Genre::orderBy('name')->lists('name', 'id')->all();
        return view('films.add', compact('genres'));
    }


    /**
     * @param FilmRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(FilmRequest $request)
    {
        $input = $request->all();

        $input['added_by'] = Auth::user()->id;
        $input['imdb'] = substr($input['imdb'], strpos($input['imdb'], '/tt') + 1, 9);
        $input['created_at'] = date('Y-m-d');
        $input['updated_at'] = date('Y-m-d');

        $film = Film::Create($input);
        if (isset($input['genre_list'])) {
            $film->genres()->attach($input['genre_list']);
        }
        return redirect('films');
    }


    /**
     * @param Film $film
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Film $film)
    {

        $genres = Genre::orderBy('name')->lists('name', 'id')->all();
        return view('films.edit', compact('film', 'genres'));

    }


    /**
     * @param Film $film
     * @param FilmRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Film $film, FilmRequest $request)
    {

        // get values and update the film based on them
        $input = $request->all();
        $film->update($request->all());

        // Reset all genres
        $film->genres()->sync($input['genre_list']);

        return redirect('films/' . $film->id);
    }

}

?>