<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\editUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersListController extends Controller
{
    public function index()
    {
        $users = User::all();
        // dd($users);
        return view('showUsersList', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        return view('editUser', compact('user'));
    }

    public function update(Request $editUserRequest, User $user)
    {
        $user->update($editUserRequest->all());
        // dd($editUserRequest);
        return redirect()->route('users.index')->with('info', 'L\'emprunteur a bien été modifié.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('info', 'L\'emprunteur a bien été supprimé.');
    }
}
