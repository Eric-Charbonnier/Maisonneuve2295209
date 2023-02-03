@extends('layouts.app')
@section('title', 'Détails de l\'étudiant')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Détails de l'étudiant</h1>
      <table class="table table-striped">
        <tr>
          <th>Nom :</th>
          <td>{{ $etudiantDetail->name }}</td>
        </tr>
        <tr>
          <th>Adresse :</th>
          <td>{{ $etudiantDetail->address }}</td>
        </tr>
        <tr>
          <th>Téléphone :</th>
          <td>{{ $etudiantDetail->phone }}</td>
        </tr>
        <tr>
          <th>Email :</th>
          <td>{{ $etudiantDetail->email }}</td>
        </tr>
        <tr>
          <th>Date de naissance :</th>
          <td>{{ $etudiantDetail->birthdate }}</td>
        </tr>
        <tr>
          <th>Ville :</th>
          <td>{{ $etudiantDetail->etudiantHasVille->name ?? 'ville inconnue'}}</td>
        </tr>
      </table>
        <a href="{{ route('etudiant.index') }}" class="btn btn-secondary btn-dark">Retour à la liste</a>
        <a href="{{ route('etudiant.edit', $etudiantDetail->id) }}" class="btn btn-info">Modifier</a>
              <!-- Button trigger modal -->
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Supprimer
      </button>

      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<!-- https://getbootstrap.com/docs/5.3/components/modal/#how-it-works -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer l'étudiant</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Confirmer la suppression
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <form class="d-inline-block" action="{{ route('etudiant.destroy', $etudiantDetail->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" class="btn btn-danger" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection