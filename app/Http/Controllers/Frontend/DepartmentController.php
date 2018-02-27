<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{

    public function index() {

        return view('frontend.department.department');
    }

    public function member() {

        return view('frontend.department.members');
    }

    public function profile() {

        return view('frontend.department.profile');
    }
}
