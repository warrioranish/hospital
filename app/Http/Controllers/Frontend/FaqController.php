<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\FaqRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{

    /**
     * @var FaqRepository
     */
    private $faqRepository;

    public function __construct(FaqRepository $faqRepository) {

        $this->faqRepository = $faqRepository;
    }

    public function index() {

        $faq = $this->faqRepository->getFaq(true);

        return view('frontend.faq', compact('faq'));
    }
}
