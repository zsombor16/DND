<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public function index()
    {
        $userAccounts = UserAccount::all();
        return response()->json($userAccounts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:100|unique:user_accounts',
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:100|unique:user_accounts',
            'userpassword' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'city' => 'required|string|max:70',
            'interest_id' => 'required|exists:interests,id',
            'experience_id' => 'required|exists:experiences,id',
            'phone' => 'required|string|max:30|unique:user_accounts',
            'description' => 'required|string|max:100',
            'time_used' => 'required|integer',
            'profile_picture' => 'required|string|max:255',
        ]);

        $userAccount = UserAccount::create($request->all());

        return response()->json($userAccount, 201);
    }

    public function show($id)
    {
        $userAccount = UserAccount::findOrFail($id);
        return response()->json($userAccount);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:100|unique:user_accounts,username,' . $id,
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:100|unique:user_accounts,email,' . $id,
            'userpassword' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'city' => 'required|string|max:70',
            'interest_id' => 'required|exists:interests,id',
            'experience_id' => 'required|exists:experiences,id',
            'phone' => 'required|string|max:30|unique:user_accounts,phone,' . $id,
            'description' => 'required|string|max:100',
            'time_used' => 'required|integer',
            'profile_picture' => 'required|string|max:255',
        ]);

        $userAccount = UserAccount::findOrFail($id);
        $userAccount->update($request->all());

        return response()->json($userAccount);
    }

    public function destroy($id)
    {
        $userAccount = UserAccount::findOrFail($id);
        $userAccount->delete();

        return response()->json(null, 204);
    }
}

