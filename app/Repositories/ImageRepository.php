<?php
/**
 * Created by PhpStorm.
 * User: anish
 * Date: 7/31/17
 * Time: 12:32 PM
 */

namespace App\Repositories;


use App\Gallery;
use App\Image;

class ImageRepository
{
    /**
     * @var Image
     */
    private $image;

    public function __construct(Image $image) {

        $this->image = $image;
    }

    public function get_images($active = false, $id = NULL) {
        $query = $this->image;

        if($active) {
            $query = $query->where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
        } else{
            $query = $query->where('gallery_id', '=', $id)->orderBy('created_at', 'DESC')->paginate(5);
        }

        return $query;
    }

    public function GalleryNameAndId($id) {

        $gallery_id = Image::where('id', '=', $id)->value('gallery_id');

        $gallery_name = Gallery::where('id', '=', $gallery_id)->value('name');

        return [ 'id' => $gallery_id, 'name' => $gallery_name];
    }

}