<?php
/**
 * Created by PhpStorm.
 * User: anish
 * Date: 7/20/17
 * Time: 7:31 PM
 */

namespace App\Repositories;

use App\Models\Testimonial;

class TestimonialsRepository
{

    /**
     * @var Testimonial
     */
    private $testimonial;

    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function getTestimonial($active = NULL){
        $query = $this->testimonial;

        if($active) {
            $query = $query->where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
        } else {
            $query = $query->orderBy('created_at', 'DESC')->paginate(5);
        }

        return $query;
    }
}