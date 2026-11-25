<?php

namespace App\Http\Controllers;

use App\Models\Stagiaires;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function show($id)
    {
        $stagiaires = Stagiaires::findOrFail($id);
        return view('stagiaires.show',compact('stagiaires'));
    }
public function index(Request $request)
{
    $search = $request->input('search');
    $stagiaires = Stagiaires::when($search, function ($query, $search) {
            return $query->where('nom', 'like', "%{$search}%")
                         ->orWhere('prenom', 'like', "%{$search}%")
                         ->orWhere('email', 'like', "%{$search}%");
        })
        ->orderBy('nom')
        ->paginate(10);

    return view('stagiaires.index', compact('stagiaires'));
}
    public function create()
    {
        return view('stagiaires.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => ['required','string','max:150'],
            'prenom' => ['required','string','max:150'],
            'email' => ['required','email','max:200'],
            'datenaisance' => ['required','date'],
        ]);
        Stagiaires::create($validated);

        return redirect()
            ->route('stagiaires.index')
            ->with('succes','Stagiaire créé avec succés');
    }
    public function edit($id)
    {
        $stagiaires = Stagiaires::findOrFail($id);
        return view('stagiaires.edit',compact('stagiaires'));
    }
    public function update(Request $request,$id)
    {
        $stagiaires = Stagiaires::findOrFail($id);
        $validated = $request->validate([
            'nom' => ['required','string','max:150'],
            'prenom' => ['required','string','max:150'],
            'email' => ['required', 'email','max:200'],
            'datenaisance' =>['required','date'],
        ]);
        $stagiaires->update($validated);

        return redirect()
            ->route('stagiaires.index')
            ->with('succes','Stagiaire modifie');
}
public function destroy($id)
{
    $stagiaires = Stagiaires::findOrFail($id);
    $stagiaires->delete();

    return redirect()
        ->route('stagiaires.index')
        ->with('succes','Stagiaire supprimé');
}
}
