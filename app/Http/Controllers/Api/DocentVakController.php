<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Docent;
use App\Models\Vak;
use Illuminate\Http\Request;

class DocentVakController extends Controller
{
    // GET /api/docents
    public function docents()
    {
        return Docent::with('vaks')->orderBy('name')->get();
    }

    // GET /api/vaks
    public function vaks()
    {
        return Vak::with('docent')->orderBy('name')->get();
    }

    // POST /api/docents
    public function storeDocent(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'hobby' => 'nullable|string',
        ]);

        return Docent::create($validated);
    }

    // POST /api/vaks
    public function storeVak(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'docent_id' => 'required|exists:docents,id',
        ]);

        return Vak::create($validated);
    }
}
