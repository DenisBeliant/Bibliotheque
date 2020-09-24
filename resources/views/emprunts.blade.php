@extends('layouts.app')

@section('content')

{{-- <p>{{dd($emprunteurs)}}<p> --}}

@foreach($emprunteurs as $emprunteur)
{{-- <p>{{dd($emprunteur)}}<p> --}}
    <div class="row bg-white border     {{$emprunteur->status ? 'border-info' : 'border-danger'}} mb-2">


                <div class="col">

                    <p>{{$emprunteur->nom}}</p>
                    <p>{{$emprunteur->prenom}}</p>
                    <p>{{$emprunteur->email}}</p>
                    {{-- <p>{{$emprunteur['telephone']}}</p> --}}

                </div>

                <div class="col">

                    {{-- <img src="{{ $livre["photo"] }}"/> --}}

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

@endsection