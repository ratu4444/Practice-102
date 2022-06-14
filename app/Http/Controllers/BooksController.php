<?php

namespace App\Http\Controllers;

use App\Models\BooksInformation;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function create()
    {
    return view('books');
    }

    public function store(Request $request)
    {
        $bname = $request->bname;
        $author = $request->author;
        $add_books_info = BooksInformation::create([
            'book_name' => $bname,
            'author' => $author
        ]);
        return redirect()->route('form');
    }



}
