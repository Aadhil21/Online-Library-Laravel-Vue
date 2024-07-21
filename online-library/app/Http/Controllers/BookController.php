<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();
        
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }
        
        if ($request->filled('description')) {
            $query->where('description', 'like', '%' . $request->input('description') . '%');
        }
        
        if ($request->filled('genre')) {
            $query->where('genre', $request->input('genre'));
        }

        $books = $query->paginate(10);
        return response()->json($books);
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $book = Book::find($request->book_id);

        if ($book && !$user->books->contains($book)) {
            $user->books()->attach($book);
        }
        
        return response()->json(['message' => 'Book borrowed successfully']);
    }

    public function returnBook(Request $request)
    {
        $user = $request->user();
        $book = Book::find($request->book_id);

        if ($book && $user->books->contains($book)) {
            $user->books()->updateExistingPivot($book, ['returned' => true]);
        }
        
        return response()->json(['message' => 'Book returned successfully']);
    }
}
