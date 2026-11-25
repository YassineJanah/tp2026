<?php
namespace App\Http\Controllers;
use App\Models\Filiere;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FiliereController extends Controller
{
    public function show($id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('filieres.show', compact('filiere'));
    }
public function index()
{
    $filieres = Filiere::orderBy('nom')->paginate(10);
    return view('filieres.index',compact('filieres'));
}

public function create()
{
    return view('filieres.create');
}

public function store(Request $request)
{
    $validated=$request->validate([
        'code' => ['required', 'string', 'max:20', 'unique:filieres,code'],
        'nom' =>['required' , 'string' , 'max:150'],
        'description' => ['nullable' , 'string'],
    ]);

    Filiere::create($validated);

    return redirect()
    ->route('filieres.index')
    ->with('success', 'Filiere créée avec succes.');
}

public function edit(Filiere $filiere)
{
    return view('filieres.edit', compact('filiere'));
}
public function update(Request $request, Filiere $filiere)
{
    $validated = $request->validate([
        'code' => ['required', 'string', 'max:20', Rule::unique('filieres', 'code')->ignore($filiere->id)],
        'nom' => ['required','string','max:150',],
        'description' => ['nullable','string',],
    ]);
    $filiere->update($validated);
    return redirect()
        ->route('filieres.index')
        ->with('success', 'Filière modifiée avec succès.');
}

public function destroy(Filiere $filiere)
{
    $filiere->delete();

    return redirect()
        ->route('filieres.index')
        ->with('success', 'Filiere supprimée.');
}
}
