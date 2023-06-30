<?php

namespace App\Http\Controllers\Guest;


use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::paginate(5); // SELECT * FROM `pastas`

        // dd($pastas);

        return view('comics.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function show(Comic  $comic)
    {
        return view('comics.show', compact('comic'));
    }
}
