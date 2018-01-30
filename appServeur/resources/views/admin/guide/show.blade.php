@extends('layouts.app')

@section('content')
    <div class="container">
        {{ $guide->name }}
        <a href="{{route('guides.edit', ['slug' => $guide->slug])}}">Editer</a>
        {!! Form::open(['method' => 'DELETE', 'route' => ['guides.destroy', $guide->slug]]) !!}
        {{Form::submit('Supprimer')}}
        {!! Form::close() !!}
    </div>
@endsection
