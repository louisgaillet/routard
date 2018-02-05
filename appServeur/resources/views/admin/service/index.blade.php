@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            @foreach ($places as $place)
                <a href="{{route('place.show', ['slug' => $place->slug])}}" class="col-md-6 col-xs-12">
                    {{$place->name}}
                </a>
            @endforeach
        </div>
    </div>
@endsection
