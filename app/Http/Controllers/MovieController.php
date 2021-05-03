<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Inertia\{Inertia, Response};

class MovieController extends Controller
{
    public function __construct(
        public string $routeName = 'movies'
    ) {}

    public function index(): Response
    {
        return Inertia::render('Movie/Index', [
            'routeName' => $this->routeName,
            'paginate' => Movie::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Movie $movie): Response
    {
        return Inertia::render('Movie/Show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Movie $movie
     * @return Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Movie $movie
     * @return Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Movie $movie
     * @return Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
