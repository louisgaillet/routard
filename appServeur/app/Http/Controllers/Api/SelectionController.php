<?php

namespace App\Http\Controllers\Api;


use App\Models\Category;
use App\Models\Place;
use App\Models\Selection;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();
        return $categories;
    }


    public function store(Request $request){
        $data = $request->json()->all();
        $user_id = $data['user_id'];
        $selections = $data['selection'];

        // On supprime l'ancienne selection
        Selection::where('user_id',$user_id)->delete();

        foreach ($selections as $selection){
            $newSelection = new Selection();
            $newSelection->service_id = $selection;
            $newSelection->user_id = $user_id;
            $newSelection->save();
        }
        return response()->json('yep', 200);

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
