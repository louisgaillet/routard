<?php

namespace App\Http\Controllers\Api;


use App\Models\Place;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Tests\JsonSerializableObject;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($place)
    {
        $ObjectPlace = Place::where('slug',$place)->first();
        return Service::where('place_id', $ObjectPlace->id)->get();
    }



    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */

    public function showWithCoords(Request $request){
        $lat1 = $request->query->get('lat1');
        $lng1 = $request->query('lng1');
        $lat2 = $request->query->get('lat2');
        $lng2 = $request->query('lng2');

        $services = Service::getByDistance($lng1, $lng2, $lat1, $lat2 );

        return $services;
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return Service::where('slug',$slug)->with('category')->first();
    }

}
