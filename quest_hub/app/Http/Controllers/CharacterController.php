<?php
namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Character;
use App\Models\CharClass;
use App\Models\CharRace;
use App\Models\CharSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', ['characters' => $characters]);
    }
    public function create()
    {
        $charclasses  = CharClass::all();
        $charraces = CharRace::all();
        $charsheet = CharSheet::all();
        $accounts = Account::all();
        return view('characters.create', ['charsheet' => $charsheet, 'accounts' => $accounts,'races'=>$charraces,'classes'=>$charclasses]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([

            //Character fields
            'name' => 'required|string|max:100',
            'class' => 'required|string|max:100',
            'race' => 'required|string|max:100',
            'character_level' => 'required|integer',
            'player_name' => 'required|string|max:100',
            'character_detail_pdf' => 'nullable|string|max:100',
            'user_id' => 'nullable|exists:user_accounts,id',

            //charsheet fields
            'Strength' => 'required|integer',
            'Dexterity' => 'required|integer',
            'Constitution' => 'required|integer',
            'Intelligence' => 'required|integer',
            'Wisdom' => 'required|integer',
            'Charisma' => 'required|integer',
            'Proficiency' => 'required|integer',
            'Walkingspeed' => 'required|integer',
            'Initiative' => 'required|integer',
            'Armorclass' => 'required|integer',
            'Maxhealth' => 'required|integer',
            'Currenthealth' => 'required|integer',


        ]);
        DB::transaction(function () use ($validated) {
            // Create Character
            $character = Character::create([
                'name' => $validated['name'],
                'class' => $validated['class'],
                'race' => $validated['race'],
                'character_level' => $validated['character_level'],
                'player_name' => $validated['player_name']
            ]);

            // Create CharSheet and associate it with the Character
            $charSheet = CharSheet::create([
                'Strength' => $validated['Strength'],
                'Dexterity' => $validated['Dexterity'],
                'Constitution' => $validated['Constitution'],
                'Intelligence' => $validated['Intelligence'],
                'Wisdom' => $validated['Wisdom'],
                'Charisma' => $validated['Charisma'],
                'Proficiency' => $validated['Proficiency'],
                'Walkingspeed' => $validated['Walkingspeed'],
                'Initiative' => $validated['Initiative'],
                'Armorclass' => $validated['Armorclass'],
                'Maxhealth' => $validated['Maxhealth'],
                'Currenthealth' => $validated['Currenthealth'],
                // Associate with character_id
                'character_id' => $character->id
            ]);

            // Update the character to link the sheet_id
            $character->update(['sheet_id' => $charSheet->id]);
        });

        return redirect()->route('characters.index')->with('success', "Character created successfully!");
    }


    public function show(Character $character)
    {
        return view('characters.show', ['character' => $character]);
    }

    public function edit(Character $character, CharSheet $charsheet)
    {
        $charclasses  = CharClass::all();
        $charraces = CharRace::all();
        $charsheet = CharSheet::all();
        $accounts = Account::all();
        return view('characters.edit', ['character' => $character, 'charsheet' => $charsheet, 'accounts' => $accounts,'charraces'=>$charraces,'charclasses'=>$charclasses]);
    }

    public function update(Request $request, Character $character, CharSheet $charsheet)
    {
        $request->validate([
            //Character fields
            'name' => 'required|string|max:100',
            'class' => 'required|string|max:100',
            'race' => 'required|string|max:100',
            'character_level' => 'required|integer',
            'player_name' => 'nullable|string|max:100',
            'character_detail_pdf' => 'nullable|string|max:100',
            'user_id' => 'nullable|exists:user_accounts,id',


            //CharSheet fields
            'Strength' => 'required|integer',
            'Dexterity' => 'required|integer',
            'Constitution' => 'required|integer',
            'Intelligence' => 'required|integer',
            'Wisdom' => 'required|integer',
            'Charisma' => 'required|integer',
            'Proficiency' => 'required|integer',
            'Walkingspeed' => 'required|integer',
            'Initiative' => 'required|integer',
            'Armorclass' => 'required|integer',
            'Maxhealth' => 'required|integer',
            'Currenthealth' => 'required|integer',
        ]);
        $character->update($request->all());
        $charsheet->update($request->all());

            if ($character->sheet_id) {
                CharSheet::where('id', $character->sheet_id->update($charsheet));
            } else {
                $charSheet = CharSheet::create([$charsheet]);
                $character->update(['sheet_id' => $charSheet->id]);
            }
        return redirect()->route('characters.show', ['character' => $character])->with('succes', "Character update successfully");
    }

    public function destroy($id)
    {
        $character = Character::findOrFail($id);
        $character->delete();

        return response()->json(null, 204);
    }
}
