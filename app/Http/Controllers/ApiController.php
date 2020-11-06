<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getBook(Request $request)
    {
        $b = Book::findOrFail($request->id);
        return response()->json($b, 200);
    }

    public function setBook(Request $request)
    {
        $request->validate([
            'author' => 'required|max:255|string',
            'description' => 'required|string'
        ]);

        $b = new Book;
        $b->author = $request->author;
        $b->description = $request->description;
        $b->save();
        return response()->json(['message' => 'success, book has been successfully created', 'book' => $b], 200);
    }
}
