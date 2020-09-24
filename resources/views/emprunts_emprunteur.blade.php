@extends('layouts.app')

@section('content')

<p>
    <a> Nom : {{$emprunteur['nom']}} </a>
    <a> Prenom : {{$emprunteur['prenom']}} </a>
</p>

<h1>Ses emprunts :</h1>

@foreach($emprunts as $emp)

<ul>
    <li> Titre : {{$emp->titre}} </li>
    <li> Date d'emprunts : {{$emp->date_location}}<li>
    <li> Date de retour prévue : {{$emp->fin_location}}<li>
    <a class="btn {{$emp->date_rendue == null ? 'btn-danger' : 'btn-success'}}">{{$emp->date_rendue == null ? 'A rendre' : 'Rendu'}}</a>
</ul>

@endforeach


@endsection