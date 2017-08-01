<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['name', 'status'];

    public function images() {
        return $this->hasMany('App\Image');
    }
}
