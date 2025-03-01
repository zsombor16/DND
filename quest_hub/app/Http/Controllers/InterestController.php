<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index()
    {
        $interests = Interest::all();
        return response()->json($interests);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $interest = Interest::create([
            'name' => $request->name,
        ]);

        return response()->json($interest, 201);
    }

    public function show($id)
    {
        $interest = Interest::findOrFail($id);
        return response()->json($interest);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $interest = Interest::findOrFail($id);
        $interest->update([
            'name' => $request->name,
        ]);

        return response()->json($interest);
    }

    public function destroy($id)
    {
        $interest = Interest::findOrFail($id);
        $interest->delete();

        return response()->json(null, 204);
    }
}

