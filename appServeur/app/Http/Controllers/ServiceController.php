<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * @param  string  $slug
     * @param  \Illuminate\Http\Request  $request
     */
    public function create(Request $request, $slug)
    {
        $place = Place::where('slug', $slug)->first();
        $categories_primary = Category::whereNull('parent_id')->get();
        $categories_secondary = Category::whereNotNull('parent_id')->get();
        return view('admin/service/create', [
            'place' => $place,
            'categories_primary' => $categories_primary,
            'categories_secondary' => $categories_secondary
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug)
    {
        $place = Place::where('slug', $slug)->first();

        $service = new Service();
        $service->name = $request->name;
        $service->place_id = $place->id;
        $service->category_id = $request->category_id;
        $service->category_secondary_id = $request->category_secondary_id;
        $service->slug = str_slug($request->name);
        $service->introduction = $request->introduction;
        $service->level_price = $request->level_price;
        $service->details = $request->details;
        $service->route = $request->route;
        $service->street_number = $request->street_number;
        $service->locality =$request->locality;
        $service->country = $request->country;
        $service->phone = $request->phone;
        $service->lat = $request->lat;
        $service->lng = $request->lng;
        $service->save();

        return redirect()->route('services.create', [$place->slug])->with('ok', 'Sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $place
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($place,$slug)
    {
        $service = Service::where('slug',$slug)->first();
        return view('admin/service/show', ['place' =>$place,'service' => $service]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $place
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($place, $slug)
    {
        $categories = Category::all();
        $service = Service::where('slug', $slug)->first();
        $categories_primary = Category::whereNull('parent_id')->get();
        $categories_secondary = Category::whereNotNull('parent_id')->get();
        return view('admin/service/edit',
            [
                'place' => $place,
                'categories_primary' => $categories_primary,
                'categories_secondary' =>$categories_secondary,
                'service' => $service
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param  string  $place
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $place, $slug)
    {
        $service = Service::where('slug', $slug)->first();
        $service->name = $request->name;
        $service->category_id = $request->category_id;
        $service->category_secondary_id = $request->category_secondary_id;
        $service->introduction = $request->introduction;
        $service->level_price = $request->level_price;
        $service->details = $request->details;
        $service->route = $request->route;
        $service->street_number = $request->street_number;
        $service->locality =$request->locality;
        $service->country = $request->country;
        $service->phone = $request->phone;
        $service->lat = $request->lat;
        $service->lng = $request->lng;
        $service->save();
        return redirect()->route('services.create', [$place])->with('ok', 'Sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
