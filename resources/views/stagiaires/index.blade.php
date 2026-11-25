@extends('layouts.app')

@section('title', 'Liste des stagiaires')

@section('content')

<h1>Liste des Stagiaires</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <a href="{{ route('stagiaires.create') }}" class="btn btn-success">
        Ajouter un stagiaire
    </a>

    <form action="{{ route('stagiaires.index') }}" method="GET" class="d-flex" style="gap: 10px;">
        <input type="text" name="search" class="form-control" placeholder="Rechercher par nom, prénom..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Rechercher</button>
        @if(request('search'))
            <a href="{{ route('stagiaires.index') }}" class="btn btn-secondary">Actualiser</a>
        @endif
    </form>
</div>

<br>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Date naissance</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($stagiaires as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->nom }}</td>
                    <td>{{ $s->prenom }}</td>
                    <td>{{ $s->email }}</td>
                    <td>{{ $s->datenaisance }}</td>
                    <td>
                        <a href="{{ route('stagiaires.edit', $s->id) }}" class="btn btn-warning">
                            Modifier
                        </a>

                        <form method="POST"
                            action="{{ route('stagiaires.destroy', $s->id) }}"
                            style="display:inline-block"
                            onsubmit="return confirm('Voulez-vous supprimer ce stagiaire ?')">
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
                    <td colspan="6">Aucun stagiaire trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<br>

<!-- ضروري تزيد appends باش الباجيناسيون تخدم مزيان مع البحث -->
{{ $stagiaires->appends(['search' => request('search')])->links() }}

@endsection
