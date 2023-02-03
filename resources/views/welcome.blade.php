@extends('layouts.app')
@section('title', 'Accueil - TP1 - Maisonneuve2295209')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 text-center pt-5">
      <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
      <p>
        Bienvenue sur la banque d'information des étudiants du Collège Maisonneuve, cliquez sur le bouton ci-dessous
      </p>
      <br>
      <a href="{{ route('etudiant.index') }}" class="btn btn-outline-primary">
        Afficher les étudiants</a>
    </div>
  </div>
</div>
@endsection