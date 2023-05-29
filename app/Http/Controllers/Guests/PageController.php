<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $comicsDB = Comic::all();
        $db = config('db');
        return view('comics', compact('comicsDB', 'db'));
    }
}

