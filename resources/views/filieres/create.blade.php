@extends('layouts.app')

@section('content')
<h1>Nouvelle filiere</h1>

<form method="POST" action="{{ route('filieres.store') }}">
    @csrf

 <div class="mb-3">
        <label for="code" class="form-label">Code</label>
        <input
            type="text"
            name="code"
            id="code"
            value="{{ old('code') }}"
            class="form-control @error('code') is-invalid @enderror"
        >
        @error('code')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input
        type="text"
        name="nom"
            value="{{ old('nom') }}"
            class="form-control @error('nom') is-invalid @enderror"
        >
        @error('nom')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input
        type="text"
        name="description"
            value="{{ old('description') }}"
            class="form-control @error('description') is-invalid @enderror"
        >
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


        <button type="submit" class="btn btn-primary">
        Enregistrer
    </button>
</form>
@endsection
