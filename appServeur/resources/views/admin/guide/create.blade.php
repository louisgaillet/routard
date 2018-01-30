@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter un guide</h2>
        {!! Form::open(['action' => 'GuideController@store','files' => true]) !!}
        {{ Form::text('name') }}
        {{ Form::file('picture')}}
        {{Form::submit('Sauvegarder')}}
        {!! Form::close() !!}
    </div>
@endsection
