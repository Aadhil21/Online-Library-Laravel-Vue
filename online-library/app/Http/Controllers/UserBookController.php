<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserBookController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $books = $user->books()->wherePivot('returned', false)->get();
        return response()->json($books);
    }
}
