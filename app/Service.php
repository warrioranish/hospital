<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable,
    Illuminate\Database\Eloquent\Model;

class Service extends Model
{

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
                'source' => 'title'
            ]
        ];
    }
}
