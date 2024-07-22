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
        $query = DB::table('books');
        
        // Apply search filters if provided
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }
        
        if ($request->filled('description')) {
            $query->where('description', 'like', '%' . $request->input('description') . '%');
        }
        
        if ($request->filled('genre')) {
            $query->where('genre', $request->input('genre'));
        }

        // Return paginated results
        $books = $query->paginate(10);
        return response()->json($books);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $book = Book::find($request->input('book_id'));
    
        // Check if the book exists
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
    
        // Check if the user has already borrowed this book
        $existingBorrow = $user->books()->where('book_id', $book->id)->first();
    
        if ($existingBorrow && $existingBorrow->pivot->returned == false) {
            return response()->json(['message' => 'Book already borrowed'], 400);
        }
    
        // Allow borrowing the book again if it was previously returned
        if ($existingBorrow && $existingBorrow->pivot->returned == true) {
            $user->books()->updateExistingPivot($book->id, ['returned' => false]);
            return response()->json(['message' => 'Book borrowed again successfully'], 200);
        }

        // Record the book as borrowed
        $user->books()->attach($book->id, ['returned' => false]);
        return response()->json(['message' => 'Book borrowed successfully'], 200);
    }
    
    public function returnBook(Request $request)
    {
        $user = Auth::user();
        $bookId = $request->input('book_id');
    
        // Find the book and check if it's borrowed
        $book = Book::find($bookId);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
    
        $borrowedBook = $user->books()->wherePivot('returned', false)->where('book_id', $bookId)->first();
    
        // Mark the book as returned
        if ($borrowedBook) {
            $user->books()->updateExistingPivot($bookId, ['returned' => true]);
            return response()->json(['message' => 'Book returned successfully'], 200);
        }
    
        return response()->json(['message' => 'Book not found or not borrowed by user'], 404);
    }
}