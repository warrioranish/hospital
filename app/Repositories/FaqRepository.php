<?php
/**
 * Created by PhpStorm.
 * User: anish
 * Date: 7/25/17
 * Time: 3:18 PM
 */

namespace App\Repositories;


use App\Faq;

class FaqRepository
{

    /**
     * @var Faq
     */
    private $faq;

    public function __construct(Faq $faq)
    {

        $this->faq = $faq;
    }

    public function getFaq($active = false) {

        $query = $this->faq;

        if($active) {
            $query = $query->where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
        } else {
            $query = $query->orderBy('created_at', 'DESC')->paginate(5);
        }

        return $query;

    }
}