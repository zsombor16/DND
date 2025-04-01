<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use Illuminate\Http\Request;

class AdventureController extends Controller
{
    public function index()
    {
        $adventures = Adventure::all();
        return view('adventures.index',['adventures'=>$adventures]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:user_accounts,id',
            'name' => 'required|string|max:100',
            'complexity' => 'required|string|max:70',
            'description' => 'required|string|max:100',
            'pictures' => 'required|string|max:255',
            'assets' => 'required|string|max:100',
            'detail_pdf' => 'required|string|max:255',
        ]);

        $adventure = Adventure::create($request->all());

        return response()->json($adventure, 201);
    }

    public function show($id)
    {
        $adventure = Adventure::findOrFail($id);
        return response()->json($adventure);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:user_accounts,id',
            'name' => 'required|string|max:100',
            'complexity' => 'required|string|max:70',
            'description' => 'required|string|max:100',
            'pictures' => 'required|string|max:255',
            'assets' => 'required|string|max:100',
            'detail_pdf' => 'required|string|max:255',
        ]);

        $adventure = Adventure::findOrFail($id);
        $adventure->update($request->all());

        return response()->json($adventure);
    }

    public function destroy($id)
    {
        $adventure = Adventure::findOrFail($id);
        $adventure->delete();

        return response()->json(null, 204);
    }
}

