<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BookListController extends Controller
{
    public function index() {
        $books = Books::all();
        // dd($books);
        return view('bookList', compact('books'));
    }
}
