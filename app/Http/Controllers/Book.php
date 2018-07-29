<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Book extends Controller
{
    //
    public function index()
    {
        return view('books.book');
    }
}
