<?php
/**
 * Created by PhpStorm.
 * User: anish
 * Date: 7/21/17
 * Time: 11:04 AM
 */

namespace App\Repositories;


use App\Models\Slider;

class SliderRepository
{

    /**
     * @var Slider
     */
    private $slider;

    public function __construct(Slider $slider) {

        $this->slider = $slider;
    }

    public function getSliders($active = NULL){

        $query = $this->slider;

        if($active){
            $query = $query->where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
        } else {
            $query = $query->orderBy('created_at', 'DESC')->paginate(5);
        }

        return $query;
    }
}