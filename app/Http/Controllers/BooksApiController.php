<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\JsonResponse;

class BooksApiController extends Controller
{
    /**
     * @var Book
     */
    private $book;

    /**
     * Create a new controller instance.
     *
     * @param Book $book
     */
    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    /**
     * Make an api route where someone can get their books (needs to be filtered by current status only)
     * with pagination
     *
     * @return JsonResponse
     */
    public function index()
    {
        // Get the status ID (default to 2 = started)
        $status_id = \request('status', 2);

        $books = $this->book->where('read_status_id', $status_id)->paginate(1);
        return response()->json($books, 200);
    }

    /**
     * API route where someone can get the details of 1 book by id
     *
     * @param $id
     * @return JsonResponse
     */
    public function get($id)
    {
        $books = Book::find($id);
        if (is_null($books)) {
            return response()->json(null, 404);
        }

        $book = Book::with('status')->findOrFail($id);
        return response()->json($book, 200);
    }
}
