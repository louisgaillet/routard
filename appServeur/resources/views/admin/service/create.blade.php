@extends('layouts.app')


@section('content')
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <div class="container" onload="initialize()">

        <h2>Ajouter un élément à {{$place->name}}</h2>

        {{Form::open(array('route'  => array('services.store', $place->slug)))}}
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
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input id="user_input_autocomplete_address" placeholder="Adresse...">
            <input id="phone" name="phone" type = "phone" placeholder="Téléphone...">
            <input id="street_number" name="street_number" type="hidden">
            <input id="route" name="route" type="hidden">
            <input id="locality" name="locality" type="hidden">
            <input id="country" name="country" type="hidden">
            <input id="latitude" name="lat" type="hidden">
            <input id="longitude" name="lng" type="hidden">
        </div>

        <div class="form-group">
            <label>Introduction</label>
            <textarea id="introduction" name="introduction" ></textarea>
        </div>
        <div class="form-group">
            <label>Detail</label>
            <textarea id="detail" name="details" ></textarea>
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