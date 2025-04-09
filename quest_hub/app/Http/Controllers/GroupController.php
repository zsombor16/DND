<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Account;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'group_name' => 'required|string|max:70',
            'description' => 'max:100',
        ]);

        Group::create($request->only('group_name', 'description'));

        return redirect()->route('groups.index')->with('success', 'Group created successfully');
    }

    public function show($id)
    {
        $group = Group::findOrFail($id);
        $members = $group->accounts;
        return view('groups.show', compact('group', 'members'));
    }

    public function edit($id)
    {
        $group = Group::findOrFail($id);
        return view('groups.edit', compact('group'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'group_name' => 'required|string|max:70',
            'description' => 'max:100',
            'username' => 'nullable|string|max:100'
        ]);

        $group = Group::findOrFail($id);
        $group->update($request->only('group_name', 'description'));
        if ($request->filled('username')) {
            $account = Account::where('username', $request->input('username'))->first();
            if ($account) {
                $group->accounts()->attach($account->id);
            } else {
                return redirect()->back()->withErrors(['username' => 'User not found.']);
            }
        }

        return redirect()->route('groups.edit',$group->id)->with('success', 'Group updated successfully.');
    }

    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();

        return response()->json(null, 204);
    }
}
