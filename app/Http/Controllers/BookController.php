<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function popular()
    {
        return view('books.popular');
    }
}
