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

                @if($livre['stock'] > 0)
                    <div class="btn-group">
                        
                        <a class="btn btn-success" href="{{ route('pret.show', $livre->id) }}">
                                Prêter
                        </a>
                    </div>

                @else
                <div class="btn-group">
                        
                    <a class="btn btn-danger">
                            Prêter
                    </a>
                </div>

                @endif

                <div class="btn-group">

                    <a class="btn btn-info" href="{{ route('livres.edit', $livre->id) }}">
                        Editer
                    </a>

                </div>

            </div>

    </div>

<style>

</style>

@endforeach

@endsection