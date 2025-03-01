<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return response()->json($experiences);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:experiences',
        ]);

        $experience = Experience::create([
            'name' => $request->name,
        ]);

        return response()->json($experience, 201);
    }

    public function show($id)
    {
        $experience = Experience::findOrFail($id);
        return response()->json($experience);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:experiences,name,' . $id,
        ]);

        $experience = Experience::findOrFail($id);
        $experience->update([
            'name' => $request->name,
        ]);

        return response()->json($experience);
    }

    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();

        return response()->json(null, 204);
    }
}
