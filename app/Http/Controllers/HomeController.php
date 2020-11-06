<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
    public function index(){
        $b = Book::first();
        return view('welcome', compact('b'));
    }
}
