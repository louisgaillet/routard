<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 'slug', 'parent_id'
    ];


    public function places()
    {
        return $this->hasMany(\App\Models\Place::class);
    }

}
