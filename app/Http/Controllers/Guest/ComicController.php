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

    public function store(Request $request)
    {
        $request->validate([
            'title'           => 'string|max:200',
            'price'           => 'string|max:100',
            'series'          => 'string|max:100',
            'sale_date'       => 'max:255',
            'type'            => 'max:100',
            'descrizione'     => 'string| max:2000',
        ]);



        $data = $request->all();

        $newComics = new Comic();
        $newComics->title = $data['title'];
        $newComics->price = $data['price'];
        $newComics->series = $data['series'];
        $newComics->sale_date = $data['sale_date'];
        $newComics->type = $data['type'];
        $newComics->save();


        return redirect()->route('comics.show', ['comic' => $newComics->id]);
    }
}
