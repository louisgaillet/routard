@extends('layouts.app')

@section('content')
    <div class="container">
        {{ $category->name }}
        <a href="{{route('categories.edit', ['slug' => $category->slug])}}">Editer</a>
        {!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->slug]]) !!}
        {{Form::submit('Supprimer')}}
        {!! Form::close() !!}
    </div>
@endsection
