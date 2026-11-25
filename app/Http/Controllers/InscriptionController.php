<?php

namespace App\Http\Controllers;

use App\Models\inscriptions;
use App\Models\Stagiaire;


use App\Models\Filiere;
use App\Models\Stagiaires;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    {
        $inscriptions = inscriptions::with(['stagiaire', 'filiere'])
            ->latest()->get();

        return view('inscriptions.index', compact('inscriptions'));
    }

    public function create()
    {
        $stagiaires = Stagiaires::all();
        $filieres = Filiere::all();

        return view('inscriptions.create', compact(
            'stagiaires',
            'filieres'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'stagiaire_id' => 'required|exists:stagiaires,id',
            'filiere_id' => 'required|exists:filieres,id',
            'date_inscription' => 'required|date',
            'statut' => 'required|in:en_attente,acceptee,refusee',
        ]);

        Inscriptions::create($validated);

        return redirect()->route('inscriptions.index')
            ->with('success', 'Inscription ajoutée avec succès.');
    }

    public function show(Inscriptions $inscription)
    {
        $inscription->load(['stagiaire', 'filiere']);

        return view('inscriptions.show', compact('inscription'));
    }


    public function edit(Inscriptions $inscription)
    {
        $stagiaires = Stagiaires::all();
        $filieres = Filiere::all();

        return view('inscriptions.edit', compact(
            'inscription',
            'stagiaires',
            'filieres'
        ));
    }

    public function update(Request $request, Inscriptions $inscription)
    {
        $validated = $request->validate([
            'stagiaire_id' => 'required|exists:stagiaires,id',
            'filiere_id' => 'required|exists:filieres,id',
            'date_inscription' => 'required|date',
            'statut' => 'required|in:en_attente,acceptee,refusee',
        ]);

        $inscription->update($validated);

        return redirect()->route('inscriptions.index')
            ->with('success', 'Inscription modifiée avec succès.');
    }

    public function destroy(inscriptions $inscription)
    {
        $inscription->delete();

        return redirect()->route('inscriptions.index')
            ->with('success', 'Inscription supprimée avec succès.');
    }
}
