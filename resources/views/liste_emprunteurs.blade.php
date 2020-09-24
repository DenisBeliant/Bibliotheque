@extends('layouts.app')

@section('content')

@foreach($emprunteurs as $emprunteur)

    <div class="row bg-white border     {{$emprunteur->status ? 'border-info' : 'border-danger'}} mb-2">


                <div class="col">

                    <p>{{$emprunteur->nom}}</p>
                    <p>{{$emprunteur->prenom}}</p>
                    <p>{{$emprunteur->email}}</p>

                </div>
    </div>
@endforeach

@endsection

