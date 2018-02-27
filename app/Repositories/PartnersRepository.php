<?php
/**
 * Created by PhpStorm.
 * User: anish
 * Date: 7/22/17
 * Time: 10:24 PM
 */

namespace App\Repositories;


use App\Models\Partner;

class PartnersRepository
{

    /**
     * @var Partner
     */
    private $partner;

    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }

    public function getPartners($active = false){

        $query = $this->partner;

        if($active){
            $query = $query->where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
        } else {
            $query = $query->orderBy('created_at', 'DESC')->paginate(5);
        }

        return $query;
    }
}