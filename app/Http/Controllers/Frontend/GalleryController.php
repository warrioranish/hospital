<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Models\Image;
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

        return view('frontend.gallery.gallery', compact('gallery') );
    }

    public function gallerylist($gallery_slugs) {

        $gallery = $this->galleryRepository->get_galleryIdbyslug($gallery_slugs);

        $images = $gallery->images()->paginate(12);

        $gallery_name = $gallery['name'];
        return view('frontend.gallery.gallery_list', compact('images', 'gallery_name'));
    }

    public function single(Image $slug) {

        $gallery= $this->imageRepository->GalleryNameAndId($slug->id);

        $gallery_images = $gallery->images;

        return view('frontend.gallery.gallery_single', ['image' => $slug, 'gallery_images' => $gallery_images, 'gallery' => $gallery]);
    }
}
