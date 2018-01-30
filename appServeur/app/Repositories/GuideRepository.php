<?php
namespace App\Repositories;
use App\Models\Guide;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

class GuideRepository
{
    public function store($request){

        // Save image
        $path = Storage::disk('images')->put('', $request->file('picture'));
        // Save thumb
        $image = InterventionImage::make($request->file('picture'))->widen(500);
        Storage::disk('images')->put($path, $image->encode());


        // Save thumb

        // Storage
        $date = new \DateTime(null);
        $slug = $request->name.$date->format('dmYis');
        $guide = new Guide();
        $guide->name =$request->name;
        $guide->slug = str_slug($slug);
        $guide->picture = $path;
        $guide->save();
    }

    public function update($request, $slug){

        if( $request->file('picture')) {
            // Save image
            $path = Storage::disk('images')->put('', $request->file('picture'));
            // Save thumb
            $image = InterventionImage::make($request->file('picture'))->widen(500);
            Storage::disk('images')->put($path, $image->encode());
        }


        // Save thumb

        // Storage
        $guide = Guide::where('slug', $slug)->first();
        $guide->name =$request->name;
        if( $request->file('picture'))
            $guide->picture = $path;
        $guide->save();
    }
}