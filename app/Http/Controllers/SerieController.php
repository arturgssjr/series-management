<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Inertia\{Inertia, Response};

class SerieController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Serie/Index', [
            'paginate' => Serie::paginate(5)
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

    public function show(Serie $series): Response
    {
        return Inertia::render('Serie/Show', compact('series'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Serie $serie
     * @return Response
     */
    public function edit(Serie $series)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Serie $serie
     * @return Response
     */
    public function update(Request $request, Serie $serie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Serie $serie
     * @return Response
     */
    public function destroy(Serie $series)
    {
        //
    }
}
