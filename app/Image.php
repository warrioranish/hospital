<?php

namespace App;

use Illuminate\Support\Str,
    Cviebrock\EloquentSluggable\Sluggable,
    Illuminate\Database\Eloquent\Model;

class Image extends Model
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

//    public static function boot() {
//        parent::boot();
//
//        static::saving(function($model) {
//
//           $model->slug = Str::slug($model->title, '_');
//
//            return true;
//        });
//    }

    public function gallery() {
        return $this->belongsTo('App\Gallery');
    }
}
