@extends('layouts.app')
@section('title', 'Ajouter un étudiant')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-12 text-center mt-2">
      <h1 class="display-one ">
        Ajouter un étudiant
      </h1>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="card">
        <form method="post" action="{{ route('etudiant.store') }}">
          @csrf
          <div class="card-header">
            Formulaire
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="address">Adresse</label>
              <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
              <label for="phone">Téléphone</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="birthdate">Date de naissance</label>
              <input type="date" class="form-control" id="birthdate" name="birthdate">
            </div>
            <div class="form-group">
              <label for="ville_id">Ville</label>
              <select class="form-control" id="ville_id" name="ville_id">
              <option value="" selected>Sélectionnez un pays</option>
                @forelse($villes as $ville)
                <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                @empty
                <option value="">Aucune ville disponible</option>
                @endforelse
              </select>
            </div>
          </div>
          <div class="card-footer">
          <a href="{{ route('etudiant.index') }}" class="btn btn-secondary btn-dark">Retour à la liste</a>
            <input type="submit" value="Sauvegarder l'étudiant" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection