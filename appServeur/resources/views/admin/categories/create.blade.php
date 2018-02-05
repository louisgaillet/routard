@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter une catégorie</h2>
        {!! Form::open(['action' => 'CategoryController@store','files' => true]) !!}
        {{ Form::text('name') }}
        {{ Form::file('picture')}}
        <select name="parent_id" id="">
            <option value="null">Catégorie parente</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        {{Form::submit('Sauvegarder')}}
        {!! Form::close() !!}
    </div>
@endsection
