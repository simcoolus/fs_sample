<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class BooksController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $books = Book::with('status')->simplePaginate(5);
        return view('books.home', compact('books'));
    }
}
