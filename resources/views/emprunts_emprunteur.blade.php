@extends('layouts.app')

@section('content')

<div class="list-group">
    <a class="list-group-item"> Nom : {{$emprunteur['nom']}} </a>
    <a class="list-group-item"> Prenom : {{$emprunteur['prenom']}} </a>
</div>

<h1>Ses emprunts :</h1>

@foreach($emprunts as $emp)

<div class="list-group">
    <a class="list-group-item"> Titre : {{$emp->titre}} </a>
    <a class="list-group-item"> Date d'emprunts : {{$emp->date_location}}<a>
    <a class="list-group-item"> Date de retour prévue : {{$emp->fin_location}}</a>
    <a class="{{$emp->date_rendue == null ? 'disabled bg-red' : 'active'}} list-group-item">{{$emp->date_rendue == null ? 'A rendre' : 'Rendu'}}</a>
</div>

<br>

@endforeach


@endsection