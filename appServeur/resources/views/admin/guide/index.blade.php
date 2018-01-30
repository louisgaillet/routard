@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
        @foreach ($guides as $guide)
            <a href="{{route('guides.show', ['slug' => $guide->slug])}}" class="col-md-6 col-xs-12">
                {{$guide->name}}
                <img src=" {{ url('images/' . $guide->picture) }}" class="" alt="">
            </a>
        @endforeach
        </div>
    </div>
@endsection
