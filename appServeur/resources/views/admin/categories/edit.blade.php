@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editer {{$category->name}}</h2>
        {{Form::open(array('route'  => array('categories.update', $category->slug), 'method' => 'put'))}}
        {{ Form::text('name',$category->name)}}
        {{Form::submit('Editer')}}
        {!! Form::close() !!}
    </div>
@endsection
