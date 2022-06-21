<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    public function latest()
    {
        $books = Book::with('authors')->orderBy('publication_date', 'desc')
            ->limit(10)
            ->get();

        return BookResource::collection($books);

        // $response = [];

        // foreach ($books as $book) {
        //     $response[] = [
        //         'title' => $book->title,
        //         'image' => $book->image,
        //         'authors' => []
        //     ];
        // }

        // return $response;
    }
}
