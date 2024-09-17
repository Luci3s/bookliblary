<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',  // Jika description opsional
            'page_count' => 'required|integer',
            'author_name' => 'required|string|max:80',
            'author_email' => 'required|string|max:50',
            'published_date' => 'nullable|date',
        ]);

        dd($validated);

        $book = Book::create([
            'title' => $validated['title'],
            'description' => $validated['description'],  // Sesuaikan jika opsional
            'page_count' => $validated['page_count'],
            'author_name' => $validated['author_name'],
            'author_email' => $validated['author_email'],
            'published_date' => $validated['published_date'],  // Pastikan tanggal valid
        ]);

        return $book;
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
