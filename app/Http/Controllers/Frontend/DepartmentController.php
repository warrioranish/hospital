<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{

    public function index() {

        return view('frontend.department');
    }

    public function member() {

        return view('frontend.members');
    }

    public function profile() {

        return view('frontend.profile');
    }
}
