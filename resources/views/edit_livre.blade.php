@extends('layouts.app')

@section('content')

<img src="{{$livre['photo']}}"/>

<form method="post" action="{{ route('livres.update', $livre->id)}}">
    
    @method('put')
    @csrf

    <label for="titre"> Titre : </label>
    <input type="text" name="titre" value="{{$livre['titre']}}"/><br>
    @error('titre') 
    <p style="color: red;">{{$message}}</p>
    @enderror 

    <label for="auteur"> Auteur : </label>
    <input type="text" name="auteur" value="{{$livre['auteur']}}"/><br>
    @error('auteur') 
    <p style="color: red;">{{$message}}</p>
    @enderror 

    <label for="stock"> Stock : </label>
    <input type="number" name="stock" value="{{$livre['stock']}}"/><br>
    @error('stock') 
    <p style="color: red;">{{$message}}</p>
    @enderror 

    <input type="submit" value="Enregistrer"/>


</form>


@endsection