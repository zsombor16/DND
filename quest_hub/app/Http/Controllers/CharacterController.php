<?php
namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return response()->json($characters);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'class' => 'required|string|max:100',
            'race' => 'required|string|max:100',
            'character_level' => 'required|integer',
            'player_name' => 'required|string|max:100',
            'character_detail_pdf' => 'required|string|max:100',
            'user_id' => 'required|exists:user_accounts,id',
        ]);

        $character = Character::create($request->all());

        return response()->json($character, 201);
    }

    public function show($id)
    {
        $character = Character::findOrFail($id);
        return response()->json($character);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'class' => 'required|string|max:100',
            'race' => 'required|string|max:100',
            'character_level' => 'required|integer',
            'player_name' => 'required|string|max:100',
            'character_detail_pdf' => 'required|string|max:100',
            'user_id' => 'required|exists:user_accounts,id',
        ]);

        $character = Character::findOrFail($id);
        $character->update($request->all());

        return response()->json($character);
    }

    public function destroy($id)
    {
        $character = Character::findOrFail($id);
        $character->delete();

        return response()->json(null, 204);
    }
}
