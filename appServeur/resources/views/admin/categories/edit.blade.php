@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editer {{$category->name}}</h2>
        {{Form::open(array('route'  => array('categories.update', $category->slug), 'method' => 'put','files' => true))}}
        {{ Form::text('name',$category->name)}}
        {{ Form::file('picture')}}
        {{Form::submit('Editer')}}
        {!! Form::close() !!}
    </div>
@endsection
