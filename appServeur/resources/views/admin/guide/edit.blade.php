@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editer le guide {{$guide->name}}</h2>
        {{Form::open(array('action' => array('GuideController@update', $guide->slug, 'method' => 'put')))}}
        {{ method_field('PUT') }}
        {{ Form::text('name',$guide->name) }}
        {{ Form::file('picture')}}
        {{Form::submit('Editer')}}
        {!! Form::close() !!}
    </div>
@endsection
