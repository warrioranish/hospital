<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{


    public function index() {

        return view('frontend.gallery');
    }

    public function single() {

        return view('frontend.gallery_single');
    }
}
