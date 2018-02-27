<?php
/**
 * Created by PhpStorm.
 * User: anish
 * Date: 8/25/17
 * Time: 2:39 PM
 */

namespace App\Repositories;


use App\Models\Service;

class ServiceRepositories
{

    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {

        $this->service = $service;
    }

    public function getServices($active = false){
        $query = $this->service;

        if($active){
            $query = $query->where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
        } else {
            $query = $query->latest()->paginate(5);
        }

        return $query;
    }
}