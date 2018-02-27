<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable,
    Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['name', 'status'];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function images() {
        return $this->hasMany('App\Models\Image');
    }
}
