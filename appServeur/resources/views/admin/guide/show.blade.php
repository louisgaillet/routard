@extends('layouts.app')

@section('content')
    <div class="container">
        {{ $guide->name }}
        <a href="{{route('guides.edit', ['slug' => $guide->slug])}}">Editer</a>
        {!! Form::open(['method' => 'DELETE', 'route' => ['guides.destroy', $guide->slug]]) !!}
        {{Form::submit('Supprimer')}}
        {!! Form::close() !!}

        <h2> Destination du guide </h2>
        @foreach ($places as $place)
            <a href="{{route('place.show', ['slug' => $place->slug])}}" class="col-md-6 col-xs-12">
                {{$place->name}}
            </a>
        @endforeach
    </div>
@endsection
