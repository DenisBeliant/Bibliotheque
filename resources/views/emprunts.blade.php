@extends('layouts.app')

@section('content')

@foreach($emprunteurs as $emprunteur)

    <div class="row bg-white border     {{$emprunteur->status ? 'border-info' : 'border-danger'}} mb-2">


                <div class="col">

                    <p>{{$emprunteur->nom}}</p>
                    <p>{{$emprunteur->prenom}}</p>
                    <p>{{$emprunteur->email}}</p>

                </div>

                <div class="col">

                </div>

                <div class="col">

                    <div class="btn-group">
                        <a id="emprunter" class="btn btn-success" href='{{ route('emprunts.show', $emprunteur->id)}}'>
                                Ses emprunts ({{$emprunteur->nbEmprunt}})
                        </a>
                    </div>

                    <div class="btn-group">

                        <a class="{{ $emprunteur->status ? 'btn-success' : 'btn-danger'}} btn" href="{{ route('emprunteur.edit', $emprunteur->id)}}">
                            {{$emprunteur->status ? 'Désactiver' : 'Activer'}}
                        </a>

                    </div>

                </div>

    </div>

<style>

</style>

@endforeach

<p>Personne n'a emprunté dans votre bibliothèque..</p>


@endsection