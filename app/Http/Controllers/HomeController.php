<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\{Inertia, Response};

class HomeController extends Controller
{
    public function dashboard(): Response
    {
        return Inertia::render('Dashboard');
    }
}
