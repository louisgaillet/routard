<?php

namespace App\Http\Controllers\Api;

use App\Models\Place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Place::all();
    }



    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $place = Place::where('slug', $slug)->first();
        $services = $place->services->all();
        return $services;
    }

}
