<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    // Get all books
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    // Get a single book
    public function show($id)
    {
        $book = Book::find($id);
        return response()->json($book);
    }

    // Create a new book
    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publication_date = $request->publication_date;
        $book->isbn = $request->isbn;
        $book->save();
        return response()->json(['message' => 'Book created!', 'book' => $book]);
    }

    // Update an existing book
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publication_date = $request->publication_date;
        $book->isbn = $request->isbn;
        $book->save();
        return response()->json(['message' => 'Book updated!', 'book' => $book]);
    }

    // Delete a book
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return response()->json(['message' => 'Book deleted!']);
    }
}
