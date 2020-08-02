@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page heading -->
        <h1>Add Books</h1>

        <!-- Navigation button to send back to books list -->
        <div class="text-right">
            <a href="{{ route('books') }}">Back to books</a>
        </div>

        <!-- flash messages -->
        @include('includes.messages')

        <form method="post" action="{{ route('books.save') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Title</label>
                    <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                           name="title" id="title" value="{{ old('title',$book->title) }}">

                    <!-- Error -->
                    @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Author</label>
                    <input type="text" class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}"
                           name="author" id="author" value="{{ old('author',$book->author) }}">

                    <!-- Error -->
                    @if ($errors->has('author'))
                        <div class="invalid-feedback">
                            {{ $errors->first('author') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label>Blurb</label>
                <textarea class="form-control {{ $errors->has('blurb') ? 'is-invalid' : '' }}"
                          name="blurb" id="blurb" rows="4">{{ old('blurb',$book->blurb) }}</textarea>

                <!-- Error -->
                @if ($errors->has('blurb'))
                    <div class="invalid-feedback">
                        {{ $errors->first('blurb') }}
                    </div>
                @endif
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Read Status</label>
                    <select class="form-control {{ $errors->has('read_status_id') ? 'is-invalid' : '' }}" name="read_status_id" id="read_status_id">
                        @foreach($statuses as $status)
                            <option value="{{$status->id}}"
                            @if ($book->read_status_id == $status->id)
                                selected = "selected"
                            @endif
                                >{{ $status->status }}</option>
                        @endforeach
                    </select>

                    <!-- Error -->
                    @if ($errors->has('read_status_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('read_status_id') }}
                        </div>
                    @endif
                </div>
            </div>
            <input type="hidden" name="id" id="id" value="{{ old('id',$book->id) }}">
            <input type="submit" name="save" value="Save Book" class="btn btn-dark btn-block">
        </form>
    </div>
@endsection
