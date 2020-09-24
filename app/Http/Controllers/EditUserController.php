<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EditUserController extends Controller
{
    public function __invoke(User $user)
    {
        $userInfo = DB::table('users')
            ->select("*")
            ->where('id', "=", $user->id)
            ->get();
        // dd($loanHistory);
        return view('editUser', compact('user', 'userInfo'));
    }

    // public function store(Request $request) {
    //     return view('editUserConfirmation');
    // }

    public function edit(User $user)
    {
        return view('editUser', compact('user'));
    }

    public function update(Request $editUserRequest, $id)
    {
        //
    }
}
