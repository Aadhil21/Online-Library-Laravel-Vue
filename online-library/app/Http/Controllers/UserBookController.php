<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserBookController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $books = $user->books()->wherePivot('returned', false)->get();
        return response()->json($books);
    }
}
