<?php

namespace App\Http\Controllers;

use App\Models\Distributeur;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function dashboard()
    {
        $films = Film::paginate(15);
        return view('dashboard', ['films' => $films]);
    }

    public function film(Request $request)
    {
        $film = Film::Find($request->id);
        $genre = $film->genre;
        $distributeur = $film->distributeur;
        return view('film', ['film' => $film]);
    }
}
