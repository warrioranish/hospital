<?php

use App\Image,
    App\Gallery;

function ImagesNum($id) {

    $num = Image::where('gallery_id', '=', $id)->get();

    return count($num);
}

function GalleryNameAndId($id) {
    $gallery = Image::find($id)->gallery()->select('id', 'name')->first();

    return $gallery;

//    $gallery_id = Image::where('id', '=', $id)->value('gallery_id');
//
//    $gallery_name = Gallery::where('id', '=', $gallery_id)->value('name');
//
//    return [ 'gallery_id' => $gallery_id, 'gallery_name' => $gallery_name];

}

function RandomImage($id) {
    $image = Gallery::find($id)->images()->inRandomOrder()->first();

    return $image;
}


function Galleries() {

    return Gallery::where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
}
