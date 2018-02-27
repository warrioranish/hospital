@extends('frontend.layouts.index')

@section('content')

    <section class="page_breadcrumbs ls ms ms2 section_padding_15 columns_margin_0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <ol class="breadcrumb greylinks">
                        <li>
                            <a href="{{ url('/home') }}">
                                Home
                            </a>
                        </li>
                        <li class="active"> Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="map-container">
        <div id="map"></div>
    </section>

    {{--<section id="map" class="ls" data-address="14 Harriet Walk Belgravia, London">--}}
        {{--<!-- marker description and marker icon goes here -->--}}
        {{--<div class="map_marker_description">--}}
            {{--<h3>Map Title</h3>--}}
            {{--<p>Map description text</p>--}}
            {{--<img class="map_marker_icon" src="{{asset('theme/images/map_marker_icon.png')}}" alt="">--}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="ls section_padding_top_75 section_padding_bottom_100 columns_margin_bottom_40">
        <div class="container">
            <div class="row">
                @if(session('status'))
                    <div class="alert alert-success flash-message">
                        <h4 class="text-center">{{session('status')}}</h4>
                    </div>
                @endif
                <div class="col-md-8 to_animate" data-animation="scaleAppear">

                    <h2 class="section_header small">Contact Form</h2>
                    {{--{{old('name')}}--}}
                    <form class="contact-form row columns_padding_5 columns_margin_0" method="POST" action="{{ url('/contactus') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="col-sm-6">
                            <div class="contact-form-name form-group">
                                <label for="name">Full Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="{{old('name')}}" name="name" id="name"  class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-form-subject form-group">
                                <label for="subject">Subject
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="{{old('subject')}}" name="subject" id="subject"  class="form-control" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-form-phone form-group">
                                <label for="phone">Phone
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="{{old('phone_num')}}" name="phone_num" id="phone"  class="form-control" placeholder="Phone number" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-form-email form-group">
                                <label for="email">Email address
                                    <span class="required">*</span>
                                </label>
                                <input type="email" aria-required="true" size="30" value="{{old('email')}}" name="email" id="email"  class="form-control" placeholder="Your Email Address" required>
                            </div>
                        </div>
                        <div class="col-sm-12">

                            <div class="contact-form-message form-group">
                                <label for="message">Message</label>
                                <textarea aria-required="true" rows="10" cols="45" name="message" id="message" class="form-control" placeholder="Message..." required>{{old('message')}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            {!! app('captcha')->display() !!}
                        </div>
                        @if(count($errors))
                            <div class="col-sm-12 alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <span>{{$error}}</span><br>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-sm-12">
                            <div class="contact-form-submit topmargin_30">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 to_animate" data-animation="scaleAppear">

                    <h2 class="section_header small">Contact Info</h2>

                    <div>
                        <div class="media topmargin_5">
                            <div class="media-left fontsize_16">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="media-body small-text2">
                                Livingstone, Season Street 45/2
                                <br> Los angeles, Inc - 4502
                            </div>
                        </div>
                        <div class="media topmargin_5">
                            <div class="media-left fontsize_16">
                                <i class="rt-icon2-phone3"></i>
                            </div>
                            <div class="media-body fontsize_18 bold">
                                1 (800) 895 4575
                            </div>
                        </div>
                        <div class="media topmargin_5">
                            <div class="media-left fontsize_16">
                                <i class="rt-icon2-envelope"></i>
                            </div>
                            <div class="media-body small-text2 greylinks">
                                <a href="#">valeo@gmail.com</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <script>
        function initMap() {
            var uluru = {lat: 27.710566, lng: 85.3195748};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 20,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>

@endsection