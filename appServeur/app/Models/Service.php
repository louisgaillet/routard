<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Service extends Model
{
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function place()
    {
        return $this->belongsTo(\App\Models\Place::class);
    }

    public static function getByDistance($lng1, $lng2, $lat1, $lat2)
    {
        $results = Service::select('*')
            ->where([
                // Left corner

                ['lng', '>', $lng1],
                ['lng', '<', $lng2],
                ['lat', '>', $lat1],
                ['lat', '<', $lat2]

            ])
            ->orderBy('name')
            ->get();
        return $results;
    }
}
