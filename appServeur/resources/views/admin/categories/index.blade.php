@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
        @foreach ($categories as $categorie)
            <a href="{{route('categories.show', ['slug' => $categorie->slug])}}" class="col-md-6 col-xs-12">
                {{$categorie->name}}
            </a>
        @endforeach
        </div>
    </div>
@endsection
