@extends('layouts.app')

@section('content')
    <div class="container">
        {{ $place->name }}
        <a href="{{route('place.edit', ['slug' => $place->slug])}}">Editer</a>
        {!! Form::open(['method' => 'DELETE', 'route' => ['place.destroy', $place->slug]]) !!}
        {{Form::submit('Supprimer')}}
        {!! Form::close() !!}

    </div>
@endsection
