<?php
/**
 * Created by PhpStorm.
 * User: anish
 * Date: 7/30/17
 * Time: 5:20 PM
 */

namespace App\Repositories;


use App\Gallery;

class GalleryRepository
{

    /**
     * @var Gallery
     */
    private $gallery;

    public function __construct(Gallery $gallery) {

        $this->gallery = $gallery;
    }

    public function get_gallery($active = false) {
        $query = $this->gallery;

        if($active) {
            $query  = $query->where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
        } else {
            $query = $query->orderBy('created_at', 'DESC')->paginate(5);
        }

        return $query;
    }

    public function gallery_images($id) {
        $query = $this->gallery->find($id)->images()->where('status', '=', 1)->orderBy('created_at', 'DESC')->get();

        return $query;
    }

    public function get_galleryIdbyslug($slug) {
        $query = $this->gallery->where('slug', $slug)->select('id', 'name')->first();

        return $query;
    }

}