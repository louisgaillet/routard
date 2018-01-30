<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Repositories\GuideRepository;
use Illuminate\Http\Request;

class GuideController extends Controller
{
protected $repository;

    public function __construct(GuideRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $guides = Guide::all();
        return view('admin/guide/index', ['guides' => $guides]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin/guide/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'picture' => 'required|max:2000',
            'name' => 'required'
        ]);
        $this->repository->store($request);
        return redirect()->route('guides.index')->with('ok', 'le guide à été créé');
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
        $places = $guide->places;
        return view('admin/guide/show', ['guide' => $guide, 'places' =>$places]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $slug)
    {

        $guide = Guide::where('slug', $slug)->first();
        return view('admin/guide/edit', ['guide' => $guide]);
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
            'name' => 'required'
        ]);
        $this->repository->update($request, $slug);
        return redirect()->route('guides.index')->with('ok', 'le guide à été edité');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $guide = Guide::where('slug', $slug)->first();
        $guide->delete();
        return redirect()->route('guides.index')->with('ok', 'le guide à été supprimé');
    }
}
