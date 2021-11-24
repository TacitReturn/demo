<?php
//TODO: Create a route for storing a book

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Resources\BookCollection;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    public function index(): BookCollection
    {
        return new BookCollection(Book::all());
    }

    public function store(StoreBookRequest $request)
    {
        //
    }

    public function show(Book $book)
    {
        //
    }

    public function edit(Book $book)
    {
        //
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    public function destroy(Book $book)
    {
        //
    }
}
