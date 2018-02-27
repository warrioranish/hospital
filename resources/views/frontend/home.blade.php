@extends('frontend.layouts.index')

@section('content')

    @include('frontend.sliders.slider')

    <section class="ls ms section_padding_25 page_info_banners columns_padding_0 columns_margin_0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="with_padding cs main_bg_color info_banner">
                        <h4 class="text-uppercase bottommargin_30">Working hours</h4>
                        <ul class="list1 no-bullets middle-borders bottommargin_0">
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="media-body small-text2 thin">
                                        Monday - Friday
                                        <span class="pull-right">08:00 AM – 07:00 PM</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="media-body small-text2 thin">
                                        Monday - Friday
                                        <span class="pull-right">08:00 AM – 07:00 PM</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="media-body small-text2 thin">
                                        Monday - Friday
                                        <span class="pull-right">08:00 AM – 07:00 PM</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="with_padding cs main_bg_color2 info_banner">
                        <h4 class="text-uppercase bottommargin_30">Contact details</h4>
                        <ul class="list1 no-bullets middle-borders bottommargin_0">
                            <li>
                                <div class="media bottommargin_10">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body small-text2 thin">
                                        Livingstone, Season Street 45/2
                                        <br> Los angeles, Inc - 4502
                                    </div>
                                </div>
                            </li>
                            <li class="topmargin_10">
                                <a href="/contactus" target="_blank" class="theme_button inverse block_button margin_0">Get directions on the map
                                    <i class="fa fa-caret-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="with_padding cs main_bg_color3 info_banner">
                        <h4 class="text-uppercase bottommargin_30">Contact details</h4>
                        <ul class="list1 no-bullets middle-borders bottommargin_0">
                            <li>
                                <div class="media bottommargin_10">
                                    <div class="media-left">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="media-body small-text2 thin">
                                        Choose the right time and
                                        <br> date for you
                                    </div>
                                </div>
                            </li>
                            <li class="topmargin_10">
                                <a href="appointment.html" class="theme_button color3 block_button margin_0">Make an appointment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_150 section_padding_bottom_120 features">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-8">
                    <h2 class="section_header">What Makes Us Different</h2>
                    <p class="bold bottommargin_30">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of the moment.</p>
                    <hr class="divider_15">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="media img-media-teaser">
                                <div class="media-left media-middle">
                                    <img src="images/consultation.png" alt="" />
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="bold text-uppercase margin_0">
                                        <a href="#">Free
                                            <br> Consultation</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="media img-media-teaser">
                                <div class="media-left media-middle">
                                    <img src="{{asset('theme/images/prices.png')}}" alt="" />
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="bold text-uppercase margin_0">
                                        <a href="#">Affordable
                                            <br>Prices</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="divider_15">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="media img-media-teaser">
                                <div class="media-left media-middle">
                                    <img src="{{asset('theme/images/doctors.png')}}" alt="" />
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="bold text-uppercase margin_0">
                                        <a href="#">Qualified
                                            <br>Doctors</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="media img-media-teaser">
                                <div class="media-left media-middle">
                                    <img src="{{asset('theme/images/staff.png')}}" alt="" />
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="bold text-uppercase margin_0">
                                        <a href="#">Professional
                                            <br>Staff</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="divider_15">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="media img-media-teaser">
                                <div class="media-left media-middle">
                                    <img src="{{asset('theme/images/opened.png')}}" alt="" />
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="bold text-uppercase margin_0">
                                        <a href="#">24/7
                                            <br>Opened</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="media img-media-teaser">
                                <div class="media-left media-middle">
                                    <img src="{{asset('theme/images/happy.png')}}" alt="" />
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="bold text-uppercase margin_0">
                                        <a href="#">~50000 Happy
                                            <br> Clients</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ds ms section_padding_top_150 section_padding_bottom_100 page_services parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <h2 class="section_header highlight3">Our Medical Services</h2>
                    <p class="bold grey">
                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae
                    </p>
                </div>
            </div>
            <div class="row topmargin_50 columns_margin_bottom_60">
                <div class="col-md-4 col-sm-6 text-center">
                    <div class="teaser">
                        <img src="{{asset('theme/images/cardio.png')}}" alt="">
                        <h4 class="grey">
                            <a href="single-service.html">Cardio Monitoring</a>
                        </h4>
                        <p>
                            These cases are perfectly simple and easy to distinguish a free hour when our power
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                    <div class="teaser">
                        <img src="{{asset('theme/images/medical.png')}}" alt="">
                        <h4 class="grey">
                            <a href="single-service.html">Medical Treatment</a>
                        </h4>
                        <p>
                            Fusce pellentesque lectus quis placerat ultrices malesuada est vitae urna laoreet porta
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                    <div class="teaser">
                        <img src="{{asset('theme/images/emergency.png')}}" alt="">
                        <h4 class="grey">
                            <a href="single-service.html">Emergency Help</a>
                        </h4>
                        <p>
                            Donec cursus tellus libero, non porttitor felis desluctus ut justo non odio molestie
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 text-center lg-clearfix">
                    <div class="teaser">
                        <img src="{{asset('theme/images/symptom.png')}}" alt="">
                        <h4 class="grey">
                            <a href="single-service.html">Symptom Check</a>
                        </h4>
                        <p>
                            Mauris consectetur dui eget ullamcorper mehendrerit eros ligula consectetur
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                    <div class="teaser">
                        <img src="{{asset('theme/images/laboratory.png')}}" alt="">
                        <h4 class="grey">
                            <a href="single-service.html">Laboratory Test</a>
                        </h4>
                        <p>
                            Pellentesque facilisis.sollicitudin justo non odio molestie, sed venenatis elit laoreet
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                    <div class="teaser">
                        <img src="{{asset('theme/images/general.png')}}" alt="">
                        <h4 class="grey">
                            <a href="single-service.html">General Analysis</a>
                        </h4>
                        <p>
                            Morbi sollicitudin justo non odio molestie sed venenatis elit laoreet
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_90 booking_departments background_cover columns_margin_top_30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="content-card rounded muted_background">
                        <h4 class="card-heading main_bg_color">Booking a visit</h4>
                        <div class="card-content with_padding">
                            <form class="appointment-form" id="appointmentform" method="post" action="./">
                                <div class="row columns_padding_5 columns_margin_0">
                                    <div class="col-sm-12">
                                        <div class="form-group select-group bottommargin_10">
                                            <select aria-required="true" id="app-categories" name="app-category" class="choice empty form-control">
                                                <option value="" selected="" data-default="">Select Category</option>
                                                <option value="computer">Computer repair</option>
                                                <option value="laptop">Laptop repair</option>
                                                <option value="tablet">Tablet repair</option>
                                                <option value="smartphone">Smartphone repair</option>
                                            </select>
                                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group bottommargin_10">
                                            <label for="app-author" class="sr-only">Your full name
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" aria-required="true" size="30" value="" name="app-author" id="app-author" class="form-control" placeholder="Your Full Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group bottommargin_10">
                                            <label for="app-phone" class="sr-only">Your Phone Number
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" aria-required="true" size="30" value="" name="app-phone" id="app-phone" class="form-control" placeholder="Your Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group bottommargin_10">
                                            <label for="app-date" class="sr-only">Date
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" aria-required="true" size="30" value="" name="app-date" id="app-date" class="form-control right-icon" placeholder="Date">
                                            <i class="rt-icon2-calendar5" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group bottommargin_10">
                                            <label for="app-time" class="sr-only">Time
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" aria-required="true" size="30" value="" name="app-time" id="app-time" class="form-control right-icon" placeholder="Time">
                                            <i class="rt-icon2-clock2" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group bottommargin_20">
                                            <label for="app-time" class="sr-only">Message
                                                <span class="required">*</span>
                                            </label>
                                            <textarea aria-required="true" rows="5" cols="45" name="comment" id="comment" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" id="app-ubmit" name="app-submit" class="theme_button block_button color1 margin_0">Make an appointment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="content-card rounded muted_background">
                        <h4 class="card-heading main_bg_color2">Departments</h4>
                        <div class="card-content with_padding">

                            <div class="panel-group style2" id="accordion1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1" class="collapsed">
                                                Primary Health Care
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed">
                                                Gynaecological Clinic
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
                                                Diagnosis With Precise
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse4" class="collapsed">
                                                Cardiac Clinic
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea.
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <a href="departments.html" class="theme_button block_button color2 margin_0">View Full List</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_150 section_padding_bottom_120">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="section_header">Our Team</h2>
                    <p class="bold">
                        The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="owl-carousel team-carousel top-offset with-nav" data-nav="true" data-responsive-lg="6" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="1">
                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/01.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Vickie
                                        <br> Bryant</a>
                                </h4>
                                <p class="small-text">General Doctor</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 254 4512
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/02.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Geraldine
                                        <br> Graham</a>
                                </h4>
                                <p class="small-text">Dental Surgeon</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 895 4575
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/03.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Valerie
                                        <br> Farmer</a>
                                </h4>
                                <p class="small-text">Cosmetic Surgeon</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 456 5484
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/04.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Eloise
                                        <br> Stephens</a>
                                </h4>
                                <p class="small-text">Therapy</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 800 7000
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/05.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Robin
                                        <br> Ramsey</a>
                                </h4>
                                <p class="small-text">General Doctor</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 254 4512
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/06.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Claudia
                                        <br> Ortiz</a>
                                </h4>
                                <p class="small-text">Gynecologist</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 550 5500
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/01.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Vickie
                                        <br> Bryant</a>
                                </h4>
                                <p class="small-text">General Doctor</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 254 4512
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/02.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Geraldine
                                        <br> Graham</a>
                                </h4>
                                <p class="small-text">Dental Surgeon</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 895 4575
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/03.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Valerie
                                        <br> Farmer</a>
                                </h4>
                                <p class="small-text">Cosmetic Surgeon</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 456 5484
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/04.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Eloise
                                        <br> Stephens</a>
                                </h4>
                                <p class="small-text">Therapy</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 800 7000
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/05.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Robin
                                        <br> Ramsey</a>
                                </h4>
                                <p class="small-text">General Doctor</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 254 4512
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>

                        <div class="thumbnail">
                            <img src="{{asset('theme/images/team/06.jpg')}}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Claudia
                                        <br> Ortiz</a>
                                </h4>
                                <p class="small-text">Gynecologist</p>
                                <hr class="divider_15">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 550 5500
                                    </div>
                                </div>
                                <p class="social-icons greylinks">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="ls ms section_padding_top_150 section_padding_bottom_120">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="section_header">Latest News &amp; Our Blog</h2>
                    <p class="bold">
                        Sed doming virtute honestatis at, graece tamquam docendi eum an, alterum reformidans est ei nec aliquando voluptatum an, eu quidam civibus qui.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="owl-carousel team-carousel top-offset with-nav" data-nav="true" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-responsive-xs="1">
                        <article class="vertical-item content-padding with_background text-center bottom-rouded-small">
                            <div class="item-media">
                                <img src="{{asset('theme/images/blog_post1.jpg')}}" alt="" />
                            </div>
                            <div class="item-content bottom-color-border">
                                <h4 class="entry-title bottommargin_30">
                                    <a href="blog-single-right.html">Center for Medical Technology Innovation</a>
                                </h4>
                                <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat nostrud exerci</p>
                                <hr class="divider_40">
                                <a href="blog-single-right.html" class="theme_button block_button color1 margin_0">Views details</a>
                            </div>
                        </article>

                        <article class="vertical-item content-padding with_background text-center bottom-rouded-small">
                            <div class="item-media">
                                <img src="{{asset('theme/images/blog_post2.jpg')}}" alt="" />
                            </div>
                            <div class="item-content bottom-color-border color2">
                                <h4 class="entry-title bottommargin_30 highlight2">
                                    <a href="blog-single-right.html">The hospital you trust to care for those you love</a>
                                </h4>
                                <p>Est an novum regione, pro ne dicta graeci delenit. Integre equidem consectetuer te mea alii inermis</p>
                                <hr class="divider_40">
                                <a href="blog-single-right.html" class="theme_button block_button color2 margin_0">More information</a>
                            </div>
                        </article>

                        <article class="vertical-item content-padding with_background text-center bottom-rouded-small">
                            <div class="item-media">
                                <img src="{{asset('theme/images/blog_post3.jpg')}}" alt="" />
                            </div>
                            <div class="item-content bottom-color-border color3">
                                <h4 class="entry-title bottommargin_30 highlight3">
                                    <a href="blog-single-right.html">Where There is Healing…
                                        <br> There is Hope</a>
                                </h4>
                                <p>Eos an prompta fabulas quaerendum. Unum harum tollit no iusam eu nostro putant fabulas stet quidam hisea</p>
                                <hr class="divider_40">
                                <a href="blog-single-right.html" class="theme_button block_button color3 margin_0">Read more</a>
                            </div>
                        </article>

                        <article class="vertical-item content-padding with_background text-center bottom-rouded-small">
                            <div class="item-media">
                                <img src="{{asset('theme/images/blog_post1.jpg')}}" alt="" />
                            </div>
                            <div class="item-content bottom-color-border">
                                <h4 class="entry-title bottommargin_30">
                                    <a href="blog-single-right.html">Center for Medical Technology Innovation</a>
                                </h4>
                                <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat nostrud exerci</p>
                                <hr class="divider_40">
                                <a href="blog-single-right.html" class="theme_button block_button color1 margin_0">Views details</a>
                            </div>
                        </article>

                        <article class="vertical-item content-padding with_background text-center bottom-rouded-small">
                            <div class="item-media">
                                <img src="{{asset('theme/images/blog_post2.jpg')}}" alt="" />
                            </div>
                            <div class="item-content bottom-color-border color2">
                                <h4 class="entry-title bottommargin_30 color2">
                                    <a href="blog-single-right.html">The hospital you trust to care for those you love</a>
                                </h4>
                                <p>Est an novum regione, pro ne dicta graeci delenit. Integre equidem consectetuer te mea alii inermis</p>
                                <hr class="divider_40">
                                <a href="blog-single-right.html" class="theme_button block_button color2 margin_0">More information</a>
                            </div>
                        </article>

                        <article class="vertical-item content-padding with_background text-center bottom-rouded-small">
                            <div class="item-media">
                                <img src="{{asset('theme/images/blog_post3.jpg')}}" alt="" />
                            </div>
                            <div class="item-content bottom-color-border color3">
                                <h4 class="entry-title bottommargin_30 color3">
                                    <a href="blog-single-right.html">Where There is Healing…
                                        <br> There is Hope</a>
                                </h4>
                                <p>Eos an prompta fabulas quaerendum. Unum harum tollit no iusam eu nostro putant fabulas stet quidam hisea</p>
                                <hr class="divider_40">
                                <a href="blog-single-right.html" class="theme_button block_button color3 margin_0">Read more</a>
                            </div>
                        </article>

                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('frontend.testimonial.testimonials')

    @include('frontend.partners.partners')

@endsection