@extends('layouts.app')


@section('content')
    <div class="container" onload="initialize()">

        <h2>Ajouter un élément</h2>

        {{Form::open(array('route'  => array('place.update', $place->slug), 'method' => 'put'))}}
        <div class="form-group">
            <label>Guides</label>
            <select name="guide_id" id="">
                @foreach ($guides as $guide)
                    <option value="{{$guide->id}}">{{$guide->name}}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="name" value="{{$place->name}}">

                <div class="form-group">
                    <label>Address</label>
                    <input id="user_input_autocomplete_address" placeholder="Votre adresse..." value="{{$place->name}}">
                    <label>street_number</label>
                    <input id="street_number" name="street_number" value="{{$place->street_number}}">
                    <label>route</label>
                    <input id="route" name="route" value="{{$place->route}}" >
                    <label>locality</label>
                    <input id="locality" name="locality" value="{{$place->locality}}" >
                    <label>country</label>
                    <input id="country" name="country" value="{{$place->country}}" >
                    <label>latitude</label>
                    <input id="latitude" name="lat" value="{{$place->lat}}" >
                    <label>longitude</label>
                    <input id="longitude" name="lng" value="{{$place->lng}}" >
                </div>

                <div class="form-group">
                    <label>Introduction</label>
                    <textarea id="introduction" name="introduction" >
                        {{$place->introduction}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label>histoire</label>
                    <textarea id="histoire" name="histoire" >
                        {{$place->histoire}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Arriver & quitter</label>
                    <textarea id="arriver-quitter" name="arriver_quitter" >
                        {{$place->arriver_quitter}}
                    </textarea>
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