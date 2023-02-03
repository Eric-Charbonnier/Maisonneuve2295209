@extends('layouts.app')
@section('title', 'Mettre à jour un étudiant')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-12 text-center mt-2">
      <h1 class="display-4">
        Mettre à jour un étudiant
      </h1>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="card">
        <form method="post">
          @csrf
          @method('put')
          <div class="card-header bg-primary text-white">
            Formulaire
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" id="name" name="name" class="form-control" value="{{ $etudiantDetail->name }}">
            </div>
            <div class="form-group">
              <label for="address">Adresse</label>
              <input type="text" id="address" name="address" class="form-control" value="{{ $etudiantDetail->address }}">
            </div>
            <div class="form-group">
              <label for="phone">Téléphone</label>
              <input type="text" id="phone" name="phone" class="form-control" value="{{ $etudiantDetail->phone }}">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control" value="{{ $etudiantDetail->email }}">
            </div>
            <div class="form-group">
              <label for="birthdate">Date de naissance</label>
              <input type="date" id="birthdate" name="birthdate" class="form-control" value="{{ $etudiantDetail->birthdate}}">
            </div>
            <div class="control-group col-12">
              <label for="ville_id">Ville</label>

              <select name="ville_id" id="ville_id" class="form-control">
                @forelse($villes as $ville)
                @if ($ville->id == $etudiantDetail->ville_id)
                <option value="{{ $ville->id }}" selected> {{ $ville->name }} </option>
                @else
                <option value="{{ $ville->id }}"> {{ $ville->name }} </option>
                @endif
                @empty
                <option value="">Aucune ville disponible</option>
                @endforelse
              </select>

            </div>
          </div>
          <div class="card-footer">
            <a href="{{ route('etudiant.index') }}" class="btn btn-secondary btn-dark">Retour à la liste</a>
            <input type="submit" value="Mettre à jour" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection