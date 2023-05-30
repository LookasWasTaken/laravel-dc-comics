<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicsDB = Comic::OrderByDesc('id')->get();
        $db = config('db');
        return view('admin.comics.index', compact('comicsDB', 'db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $db = config("db");
        return view('admin.comics.create', compact("db"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            "title" => $request->title,
            "description" => $request->description,
            "thumb" => $request->thumb,
            "price" => $request->price,
            "series" => $request->series,
            "sale_date" => $request->sale_date,
            "type" => $request->type
        ];
        Comic::create($data);
        return to_route('comics.index')->with("added", "comic $request->title successfully added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $db = config("db");
        return view('admin.comics.show', compact("comic", "db"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $db = config("db");
        return view("admin.comics.edit", compact("comic", "db"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = [
            "title" => $request -> title,
            "description" => $request -> description,
            "thumb" => $request -> thumb,
            "price" => $request -> price,
            "series" => $request -> series,
            "sale_date" => $request -> sale_date,
            "type" => $request -> type
        ];

        $comic->update($data);
        
        return to_route("comics.show", $comic -> id)->with("edited", "comic $request->title successfully edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
