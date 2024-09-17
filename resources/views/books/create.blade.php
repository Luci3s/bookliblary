@extends('layouts.template')

@section('title', 'Add New Book')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Add New Book</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control"  
                 id="title" name="title"  
                 required>
                 @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror

                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description"></textarea>  

                    </div>

                    <div class="form-group">
                        <label for="page_count">Page Count:</label>
                        <input type="number" class="form-control" id="page_count" name="page_count" required>  

                    </div>

                    <div class="form-group">
                        <label for="author_name">Author Name:</label>
                        <input type="text" class="form-control" id="author_name" name="author_name" required>
                    </div>

                    <div class="form-group">
                        <label for="author_email">Author  
                 Email:</label>
                        <input type="email" class="form-control" id="author_email"  
                 name="author_email" required>
                    </div>

                    <div class="form-group">
                        <label for="published_date">Published Date:</label>
                        <input type="date" class="form-control" id="published_date" name="published_date">  

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
@endsection
