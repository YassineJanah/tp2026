@extends('layouts.app')

@section('title', 'Modifier une filière')

@section('content')
    <h1>Modifier une filière</h1>

    <form method="POST" action="{{ route('filieres.update', $filiere->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="code">Code</label>
            <input
                type="text"
                id="code"
                name="code"
                value="{{ old('code', $filiere->code) }}"
                required
            >
            @error('code')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="nom">Nom</label>
            <input
                type="text"
                id="nom"
                name="nom"
                value="{{ old('nom', $filiere->nom) }}"
                required
            >
            @error('nom')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea
                id="description"
                name="description"
                rows="4"
            >{{ old('description', $filiere->description) }}</textarea>
            @error('description')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn">Enregistrer les modifications</button>

        <a href="{{ route('filieres.index') }}" class="btn btn-secondary">
            Annuler
        </a>
    </form>
@endsection
