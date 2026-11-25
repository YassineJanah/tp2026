
@extends('layouts.app')

@section('title', 'Liste des filières')

@section('content')

<h1>Liste des filières</h1>

@if(session('success'))
    <div class="alert">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('filieres.create') }}" class="btn btn-success">
     Ajouter une filière
</a>

<br><br>

<div class="table-container">
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($filieres as $f)
                <tr>
                    <td>{{ $f->code }}</td>
                    <td>{{ $f->nom }}</td>
                    <td>{{ $f->description }}</td>

                    <td>
                        <a href="{{ route('filieres.edit', $f) }}">
                            Modifier
                        </a>

                        <form method="POST"
                              action="{{route('filieres.destroy', $f) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Aucune filière trouvée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<br>

{{ $filieres->links() }}

@endsection
