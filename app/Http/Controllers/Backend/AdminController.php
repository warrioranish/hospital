<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request,
    App\Http\Controllers\Controller,
    Illuminate\Support\Facades\Auth,
    Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct() {

    }

    public function index() {

        if(Auth::user()){
            return redirect('admin/dashboard');
        } else {
            return view('backend.layouts.login');
        }


    }

    public function login(){
        if(! auth()->attempt(request(['name', 'password']))){
            return back()->withErrors([
                'message' => 'please check your credentials'
            ]);
        }

        return redirect('admin/dashboard');
    }

    public function dashboard(){
        $contacts_count = DB::table('contacts')->count();
        $testimonial_count = DB::table('testimonials')->count();
        $slider_count = DB::table('sliders')->count();
        $partner_count = DB::table('partners')->count();
        $faq_count = DB::table('faqs')->count();
        $gallery_count = DB::table('galleries')->count();

        return view('backend.layouts.dashboard', compact('contacts_count', 'testimonial_count', 'slider_count', 'partner_count', 'faq_count', 'gallery_count'));
    }

    public function destroy(){
        auth()->logout();

        return redirect('/admin');
    }
}
