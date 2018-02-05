@extends('layouts.app')


@section('content')
    <div class="container" onload="initialize()">

        <h2>Editer {{ $service->name }}</h2>

        {{Form::open(array('route'  => array('services.update', $place, $service->slug), 'method' => 'put'))}}
        <div class="form-group">
            <label>Categorie</label>
            <select name="category_id" id="">
                @foreach ($categories_primary as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <select name="category_secondary_id" id="">
                <option value="0">Aucune</option>
                @foreach ($categories_secondary as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <select name="level_price" id="">
                <option value="1">Bon marché</option>
                <option value="2">Prix moyen </option>
                <option value="3">Chic</option>
            </select>

            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="name" value="{{$service->name}}">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input id="user_input_autocomplete_address" placeholder="Adresse..." value="{{$service->name}}">
                <input id="phone" name="phone" type = "phone" placeholder="Téléphone..." value="{{$service->phone}}">
                <input id="street_number" name="street_number" type="hidden" value="{{$service->street_number}}">
                <input id="route" name="route" type="hidden" value="{{$service->route}}">
                <input id="locality" name="locality" type="hidden" value="{{$service->locality}}">
                <input id="country" name="country" type="hidden" value="{{$service->country}}">
                <input id="latitude" name="lat" type="hidden" value="{{$service->lat}}">
                <input id="longitude" name="lng" type="hidden" value="{{$service->lng}}">
            </div>

            <div class="form-group">
                <label>Introduction</label>
                <textarea id="introduction" name="introduction" >{{$service->introduction}}</textarea>
            </div>
            <div class="form-group">
                <label>Detail</label>
                <textarea id="detail" name="details" >{{$service->details}}</textarea>
            </div>

            {{Form::submit('Sauvegarder')}}
            {!! Form::close() !!}

        </div>
        @endsection

        <script type="text/javascript"
                src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCFVCdbFEQ3cjgE5oJDo_nO9msS91PuX1I">
        </script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=916hzdlc3tzo9px21wtzq932vkcmxw01b5o1homnk5ybru38"></script>
        <script src="{{ asset('js/place.js') }}"></script>