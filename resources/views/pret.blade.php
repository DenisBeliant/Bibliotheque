@extends('layouts.app')

@section('content')

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
        
            <form method="post" action="{{ route('emprunts.store')}}">
        
                @csrf

            <input type="hidden" name="livre" value="{{$livre->id}}"/>

                <select name="user">
                    @foreach($users as $user)

                <option value="{{$user->id}}" name="user">{{$user->nom}}</option>

                    @endforeach
                </select>

                <input type="submit" value="Preter"/>

            </form>
        </div>

    </div>

</div>

@endsection