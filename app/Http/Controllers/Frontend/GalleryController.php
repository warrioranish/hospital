<?php

namespace App\Http\Controllers\Frontend;

use App\Gallery;
use App\Image;
use App\Repositories\GalleryRepository;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{

    /**
     * @var ImageRepository
     */
    private $imageRepository;
    /**
     * @var GalleryRepository
     */
    private $galleryRepository;

    public function __construct(ImageRepository $imageRepository, GalleryRepository $galleryRepository) {

        $this->imageRepository = $imageRepository;
        $this->galleryRepository = $galleryRepository;
    }

    public function index() {
        $gallery = $this->galleryRepository->get_gallery(true);
        $images = $this->imageRepository->get_images(true, NULL);
        return view('frontend.gallery', compact('images', 'gallery') );
    }

    public function single(Image $id) {
        $gallery = $this->imageRepository->GalleryNameAndId($id->id);
        $gallery_images = $this->galleryRepository->gallery_images($gallery['id']);

        return view('frontend.gallery_single', ['image' => $id, 'gallery_images' => $gallery_images]);
    }
}
