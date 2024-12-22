<?php

namespace App\Http\Controllers;

use App\Models\Lek;
use Illuminate\Http\Request;

class LekController extends Controller
{
    public function index()
    {
        $leki = Lek::all();
        return view('leki.index', compact('leki'));
    }

    public function create()
    {
        return view('leki.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nazwa' => 'required|string|max:255',
            'opis_leku' => 'nullable|string',
            'rozmiar' => 'required|string|max:255',
            'ilosc' => 'required|integer|min:0',
            'cena' => 'required|numeric|min:0',
        ]);

        Lek::create($request->all());
        return redirect()->route('leki.index')->with('success', 'Lek dodany.');
    }

    public function edit(Lek $lek)
    {
        return view('leki.edit', compact('lek'));
    }

    public function update(Request $request, Lek $lek)
    {
        $request->validate([
            'nazwa' => 'required|string|max:255',
            'opis_leku' => 'nullable|string',
            'rozmiar' => 'required|string|max:255',
            'ilosc' => 'required|integer|min:0',
            'cena' => 'required|numeric|min:0',
        ]);

        $lek->update($request->all());
        return redirect()->route('leki.index')->with('success', 'Lek zaktualizowany.');
    }

    public function destroy(Lek $lek)
    {
        $lek->delete();
        return redirect()->route('leki.index')->with('success', 'Lek usunięty.');
    }
}
