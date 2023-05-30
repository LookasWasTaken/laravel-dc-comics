<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comicsDB = Comic::all();
        $db = config('db');
        return view('comics', compact('comicsDB', 'db'));
    }

    public function show($id)
    {
        $db = config("db");
        $comic = Comic::where('id', $id)->get();
        return view("singleComic", compact("comic", "db"));
    }
}
