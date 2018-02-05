<?php

namespace App\Http\Controllers\Api;

use App\Models\Guide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Guide::all();
    }



    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $guide = Guide::where('slug', $slug)->first();

        return $guide->places;
    }


}
