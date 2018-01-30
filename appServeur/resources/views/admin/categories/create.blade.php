@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter une catégorie</h2>
        {!! Form::open(['action' => 'CategoryController@store']) !!}
        {{ Form::text('name') }}
        {{Form::submit('Sauvegarder')}}
        {!! Form::close() !!}
    </div>
@endsection
