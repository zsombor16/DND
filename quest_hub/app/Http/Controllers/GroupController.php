<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups.index',['groups'=>$groups]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'groupName' => 'required|string|max:70',
            'description' => 'max:100',
            'userid' => 'required|exists:user_account,id',
            'charid' => 'exists:characters,id',
        ]);

        $group = Group::create([
            'groupName' => $request->groupName,
            'description' => $request->description,
            'userid' => $request->userid,
            'charid' => $request->charid,
        ]);

        return response()->json($group, 201);
    }

    public function show($id)
    {
        $group = Group::findOrFail($id);
        return response()->json($group);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'groupName' => 'required|string|max:70',
            'description' => 'max:100',
            'userid' => 'required|exists:user_account,id',
            'charid' => 'exists:characters,id',
        ]);

        $group = Group::findOrFail($id);
        $group->update([
            'groupName' => $request->groupName,
            'description' => $request->description,
            'userid' => $request->userid,
            'charid' => $request->charid,
        ]);

        return response()->json($group);
    }

    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();

        return response()->json(null, 204);
    }
}
