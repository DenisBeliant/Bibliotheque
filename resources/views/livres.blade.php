@extends('layouts.app')

@section('content')

@foreach($livres as $livre)

    <div class="row bg-white border border-info mb-2">


                <div class="col">

                    <p>{{ $livre['titre'] }}</p>
                    <p>{{ $livre['auteur']}}</p>
                    <p>{{ $livre['stock'] == null ? 'Indisponible' : 'Stock : '.$livre['stock'] }}</p>

                </div>

                <div class="col">

                    <img src="{{ $livre["photo"] }}"/>

                </div>

                <div class="col">

                    <div class="btn-group">
                        <button id="emprunter" class="btn btn-success">
                            Prêter
                        </button>
                    </div>

                </div>

    </div>

<style>

</style>

@endforeach

@endsection