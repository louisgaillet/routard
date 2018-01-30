<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'name', 'slug', 'guide_id','route','street_number','locality','country', 'lat', 'lng', 'introduction', 'histoire', 'arriver-quitter'
    ];
}
