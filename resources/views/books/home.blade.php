@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
    <div class="container">
        <h1>My Books</h1>
        <!-- flash messages -->
        @include('includes.messages')

        <!-- add new book link -->
        <div class="text-right">
            <a href="{{ route('books.add') }}">Add new book</a>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Blurb</th>
                <th>Status</th>
            </tr>
            @foreach ($books as $book)
            <tr>
                <td>
                    <a href="{{ route('books.edit', ['id' => $book->id]) }}">{{ $book->title }}</a>
                </td>
                <td>{{ $book->author }}</td>
                <td>{{ Str::limit($book->blurb, 100) }}</td>
                <td>{{ $book->status->status }}</td>
            </tr>
            @endforeach
        </table>
        {{ $books->links() }}
    </div>
    </div>
@endsection
