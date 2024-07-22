<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserBookController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        
        if (!$user) {
            return response()->json(['message' => 'User not authenticated'], 401);
        }

        $books = $user->books()->wherePivot('returned', false)->get();
        
        if ($books->isEmpty()) {
            return response()->json(['message' => 'No borrowed books found'], 404);
        }

        return response()->json($books);
    }
}
