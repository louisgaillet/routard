<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin/categories/index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin/categories/create',['categories' => $categories]);
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
            'name' => 'required'
        ]);

        $category = new Category();
        $category->name = $request->name;
        if($request->file('picture')){
            $path = Storage::disk('images')->put('', $request->file('picture'));
            $image = InterventionImage::make($request->file('picture'))->widen(30);
            Storage::disk('images')->put($path, $image->encode());
            $category->picture = $path;
        }

        $category->slug = str_slug($request->name);
        if($request->parent_id != 'null')
            $category->parent_id = $request->parent_id;
        $category->save();

        return back()->with('ok', __("La catégorie a bien été enregistrée"));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin/categories/show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin/categories/edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();

        $category->name = $request->name;
        if($request->file('picture')){
            $path = Storage::disk('images')->put('', $request->file('picture'));
            $image = InterventionImage::make($request->file('picture'))->widen(30);
            Storage::disk('images')->put($path, $image->encode());
            $category->picture = $path;
        }
        $category->slug = str_slug($request->name);
        if($request->parent_id != 'null')
            $category->parent_id = $request->parent_id;
        $category->save();
        return redirect()->route('categories.index')->with('ok', 'la catégorie à été edité');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect()->route('categories.index')->with('ok', 'la catégorie à été supprimée');
    }
}
