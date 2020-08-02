<?php

namespace App\Http\Controllers;

use App\Book;
use App\ReadStatus;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class BooksFormController extends Controller
{

    /**
     * Create Book Form
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function createForm(Request $request)
    {
        $book = new Book();
        // Get the status list
        $statuses = ReadStatus::all();
        return view('books.add', compact('statuses', 'book'));
    }

    /**
     * Update Book Form
     *
     * @param Request $request
     * @param $id
     * @return Application|Factory|View
     */
    public function updateForm(Request $request, $id)
    {
        // Get the status list
        $book = Book::find($id);

        if(!$book instanceof Book) {
            return redirect('books')->with('error', 'Unable to find book');
        }

        // Get the status list
        $statuses = ReadStatus::all();

        return view('books.add', compact('statuses', 'book'));
    }

    /**
     * Store Book Form data
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function saveForm(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'blurb'=>'required',
            'read_status_id' => 'required'
        ]);

        $bookId = $request->get('id');

        // Get book model
        $book = new Book();

        // check if edit or create
        if(!empty($bookId)) {
            $book = Book::find($bookId);
        }

        // Store the book in database
        $book->fill($request->all());
        $book->user_id = Auth::user()->id;
        if(!$book->save())
        {
            // back to form
            return back()->with('error', 'Unable to save book');
        }

        // do a redirect
        return back()->with('success', 'Saved book');
    }
}
