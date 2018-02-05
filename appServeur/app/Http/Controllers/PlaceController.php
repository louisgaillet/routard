<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Guide;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::all();
        return view('admin/place/index', ['places' => $places]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guides = Guide::all();
        return view('admin/place/create', ['guides' => $guides]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $place = new Place();
        $place->guide_id = $request->get('guide_id');
        $place->name = $request->get('name');
        $place->slug = str_slug($request->get('name'));
        $place->route = $request->get('route');
        $place->street_number = $request->get('street_number');
        $place->locality = $request->get('locality');
        $place->country = $request->get('country');
        $place->lat = $request->get('lat');
        $place->lng = $request->get('lng');
        $place->introduction = $request->get('introduction');
        $place->histoire = $request->get('histoire');
        $place->arriver_quitter = $request->get('arriver_quitter');
        $place->save();

        return redirect()->route('place.index')->with('ok', 'Place créé');
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
        $services = $place->services;
        return view('admin/place/show', ['place' => $place, 'services' => $services]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $place = Place::where('slug', $slug)->first();
        $guides = Guide::all();
        return view('admin/place/edit', ['place' => $place, 'guides' => $guides]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required',
            'locality' => 'required',
            'country' => 'required',
            'guide_id' => 'required',
            'lat' => 'required',
            'lng' => 'required',
        ]);

        $place = Place::where('slug', $slug)->first();
        $date = new \DateTime(null);
        $slug = $request->name.$date->format('dmYis');
        $place->guide_id = $request->get('guide_id');
        $place->name = $request->get('name');
        $place->route = $request->get('route');
        $place->street_number = $request->get('street_number');
        $place->locality = $request->get('locality');
        $place->country = $request->get('country');
        $place->lat = $request->get('lat');
        $place->lng = $request->get('lng');
        $place->introduction = $request->get('introduction');
        $place->histoire = $request->get('histoire');
        $place->arriver_quitter = $request->get('arriver_quitter');
        $place->save();

        return redirect()->route('place.index')->with('ok', 'Place édité');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $place = Place::where('slug', $slug)->first();
        $place->delete();
        return redirect()->route('place.index')->with('ok', ' supprimé');
    }
}
