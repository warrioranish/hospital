@extends('backend.layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="green">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title"></h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <h4 class="card-title">Welcome, You're logged in as {{ Auth::user()->name}}.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('sliders') }}">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="orange">
                                <i class="material-icons">code</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Sliders</p>
                                <h3 class="card-title">{{ $slider_count }}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Manage Sliders
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="red">
                                <i class="material-icons">person_add</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Editors</p>
                                <h3 class="card-title"><br></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Manage Editors
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('gallery') }}">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="green">
                                <i class="material-icons">insert_photo</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Gallery</p>
                                <h3 class="card-title">{{ $gallery_count }}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Manage Gallery
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('gallery') }}">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="blue">
                                <i class="material-icons">business_center</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Departments</p>
                                <h3 class="card-title">{{ $gallery_count }}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Manage Departments
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('services')}}">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="rose">
                                <i class="material-icons">settings</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Services</p>
                                <h3 class="card-title">{{$testimonial_count}}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Manage services
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('testimonials')}}">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="blue">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="card-content">
                                <p class="category">Testimonials</p>
                                <h3 class="card-title">{{$testimonial_count}}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Manage testimonials
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('partners')}}">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="purple">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                            <div class="card-content">
                                <p class="category">Partners</p>
                                <h3 class="card-title">{{$partner_count}}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Manage Partners
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('faq')}}">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="grey">
                                <i class="material-icons">question_answer</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Faq</p>
                                <h3 class="card-title">{{$faq_count}}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Manage Faq
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('settings')}}">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="green">
                                <i class="material-icons">build</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Settings</p>
                                <h3 class="card-title"><br></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Manage Settings
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('contacts')}}">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="rose">
                                <i class="material-icons">contacts</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Contact Us</p>
                                <h3 class="card-title">{{$contacts_count}}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    View Contacts
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

