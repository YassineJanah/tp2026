@extends('layouts.app')

@section('content')
<h1>Nouveau stagiaire</h1>

<form method="POST" action="{{ route('stagiaires.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input
            type="text"
            name="nom"
            id="nom"
            value="{{ old('nom') }}"
            class="form-control @error('nom') is-invalid @enderror"
        >
        @error('nom')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input
            type="text"
            name="prenom"
            id="prenom"
            value="{{ old('prenom') }}"
            class="form-control @error('prenom') is-invalid @enderror"
        >
        @error('prenom')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
            type="email"
            name="email"
            id="email"
            value="{{ old('email') }}"
            class="form-control @error('email') is-invalid @enderror"
        >
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="datenaisance" class="form-label">Date de naissance</label>
        <input
            type="date"
            name="datenaisance"
            id="datenaissance"
            value="{{ old('datenaisance') }}"
            class="form-control @error('datenaisance') is-invalid @enderror"
        >
        @error('datenaissance')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">
        Enregistrer
    </button>
</form>
@endsection
