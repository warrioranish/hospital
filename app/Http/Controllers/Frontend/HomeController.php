<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\PartnersRepository;
use App\Repositories\SliderRepository;
use App\Repositories\TestimonialsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * @var TestimonialsRepository
     */
    private $testimonialsRepository;
    /**
     * @var SliderRepository
     */
    private $sliderRepository;
    /**
     * @var PartnersRepository
     */
    private $partnersRepository;

    public function __construct(TestimonialsRepository $testimonialsRepository, SliderRepository $sliderRepository, PartnersRepository $partnersRepository){

        $this->testimonialsRepository = $testimonialsRepository;
        $this->sliderRepository = $sliderRepository;
        $this->partnersRepository = $partnersRepository;
    }

    public function index() {
        $homepage = true;

        $testimonials = $this->testimonialsRepository->getTestimonial(TRUE);
        $sliders = $this->sliderRepository->getSliders(TRUE);
        $partners = $this->partnersRepository->getPartners(true);

//      $testimonials = DB::table('testimonials')->where('status', '=', 1)->orderBy('created_at', 'DESC')->get();

        return view('frontend.home', compact('homepage', 'testimonials', 'sliders', 'partners'));
    }

}
