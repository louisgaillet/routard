@extends('layouts.app')


@section('content')
    <div class="container" onload="initialize()">

        <h2>Ajouter un élément</h2>

        {!! Form::open(['action' => 'PlaceController@store']) !!}
        <div class="form-group">
            <label>Guides</label>
            <select name="guide_id" id="">
                @foreach ($guides as $guide)
                    <option value="{{$guide->id}}">{{$guide->name}}</option>
                @endforeach
            </select>
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="name">

        <div class="form-group">
            <label>Address</label>
            <input id="user_input_autocomplete_address" placeholder="Votre adresse...">
            <label>street_number</label>
            <input id="street_number" name="street_number">
            <label>route</label>
            <input id="route" name="route" >
            <label>locality</label>
            <input id="locality" name="locality" >
            <label>country</label>
            <input id="country" name="country" >
            <label>latitude</label>
            <input id="latitude" name="lat" >
            <label>longitude</label>
            <input id="longitude" name="lng" >
        </div>

        <div class="form-group">
            <label>Introduction</label>
            <textarea id="introduction" name="introduction" ></textarea>
        </div>
        <div class="form-group">
            <label>histoire</label>
            <textarea id="histoire" name="histoire" ></textarea>
        </div>
        <div class="form-group">
            <label>Arriver & quitter</label>
            <textarea id="arriver-quitter" name="arriver-quitter" ></textarea>
        </div>
        {{Form::submit('Sauvegarder')}}
        {!! Form::close() !!}

    </div>
@endsection

<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCFVCdbFEQ3cjgE5oJDo_nO9msS91PuX1I">
</script>
<script>

    google.maps.event.addDomListener(window, 'load', function() {
        initializeAutocomplete('user_input_autocomplete_address');
    });

    function initializeAutocomplete(id) {
        var element = document.getElementById(id);
        if (element) {
            var autocomplete = new google.maps.places.Autocomplete(element, { types: ['geocode'] });
            google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
        }
    }

    function onPlaceChanged() {
        var place = this.getPlace();

        console.log(place);  // Uncomment this line to view the full object returned by Google API.
        var lat = document.getElementById('latitude');
        var lng = document.getElementById('longitude');
        lat.value = place.geometry.location.lat();
        lng.value = place.geometry.location.lng();

        for (var i in place.address_components) {
            var component = place.address_components[i];
            for (var j in component.types) {  // Some types are ["country", "political"]
                var type_element = document.getElementById(component.types[j]);
                if (type_element) {
                    type_element.value = component.long_name;
                }
            }
        }
    }
</script>