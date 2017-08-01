<?php

use App\Image,
    App\Gallery;

function ImagesNum($id) {

    $num = Image::where('gallery_id', '=', $id)->get();

    return count($num);
}

function GalleryNameAndId($id) {

    $gallery_id = Image::where('id', '=', $id)->value('gallery_id');

    $gallery_name = Gallery::where('id', '=', $gallery_id)->value('name');

    return [ 'gallery_id' => $gallery_id, 'gallery_name' => $gallery_name];


}