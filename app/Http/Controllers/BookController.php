<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function __invoke(Books $book)
    {
        $loanHistory = DB::table('loans')
            ->join('users', 'user_id', '=', 'users.id')
            ->select("*")
            ->where('loans.user_id', "=", $book->id)
            ->get();
        // dd($loanHistory);
        return view('showBookDetails', compact('book', 'loanHistory'));
    }
}
