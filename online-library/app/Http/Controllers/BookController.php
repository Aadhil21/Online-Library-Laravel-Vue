<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(Request $request)
    {
        // return response()->json(Book::all());
        $query = DB::table('books');
        
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
        return response()->json(Book::all());
        // $user = Auth::user();
        // $book = Book::find($request->input('book_id'));

        // if (!$book) {
        //     return response()->json(['message' => 'Book not found'], 404);
        // }
    
        // if (!$user->books->contains($book)) {
        //     $user->books()->attach($book);
        //     return response()->json(['message' => 'Book borrowed successfully']);
        // }
    
        // return response()->json(['message' => 'Book already borrowed'], 400);
    }

    public function returnBook(Request $request)
    {
        $user = $request->user();
        $book = Book::find($request->input('book_id'));

        if ($book && $user->books->contains($book)) {
            $user->books()->updateExistingPivot($book, ['returned' => true]);
        }
        
        return response()->json(['message' => 'Book returned successfully']);
    }
}