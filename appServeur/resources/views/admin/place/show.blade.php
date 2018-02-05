@extends('layouts.app')

@section('content')
    <div class="container">
        {{ $place->name }}
        <a href="{{route('place.edit', ['slug' => $place->slug])}}">Editer</a>
        {!! Form::open(['method' => 'DELETE', 'route' => ['place.destroy', $place->slug]]) !!}
        {{Form::submit('Supprimer')}}
        {!! Form::close() !!}

        <a href="{{route('services.create',[$place->slug])}}">Ajouter une donnée </a>

        <h2> Présent dans la guide </h2>
        @foreach ($services as $service)
            <a href="{{route('services.show', ['place' => $place->slug, 'slug'=>$service->slug])}}" class="col-md-6 col-xs-12">
                {{$service->name}}
            </a>
        @endforeach

    </div>
@endsection
