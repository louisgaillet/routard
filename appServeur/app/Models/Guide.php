<?php

namespace App\Models;

use App\Category;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guide extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'picture'
    ];

    public function categories()
    {
        return $this->hasMany(\App\Models\Category::class);
    }

    public function places()
    {
        return $this->hasMany(\App\Models\Place::class)->orderBy('name');
    }


}
