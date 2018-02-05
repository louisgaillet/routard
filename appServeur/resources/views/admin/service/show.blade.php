@extends('layouts.app')

@section('content')
    <div class="container">
        {{ $service->name }}
        <a href="{{route('services.edit', ['place' => $place, 'slug' => $service->slug])}}">Editer</a>
        {!! Form::open(['method' => 'DELETE', 'route' => ['place.destroy', $service->slug]]) !!}
        {{Form::submit('Supprimer')}}
        {!! Form::close() !!}

    </div>
@endsection
