@extends('frontend.layouts.index')

@section('content')

<section class="page_breadcrumbs ls ms ms2 section_padding_15 columns_margin_0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <ol class="breadcrumb greylinks">
                    <li>
                        <a href="../">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li class="active"> Team</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls page_portfolio section_padding_top_140 section_padding_bottom_75">
    <div class="container">
        <div class="row bottommargin_20">
            <div class="col-md-10 col-md-offset-1 text-center">
                <h2 class="section_header">Our Team</h2>
                <p class="bold">
                    The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                <div class="isotope_container isotope row masonry-layout columns_margin_bottom_30 columns_margin_top_0">

                    <div class="isotope-item col-md-4 col-sm-6">
                        <div class="thumbnail text-center">
                            <img src="{{ asset('theme/images/team/01.jpg') }}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="{{ url('departments/members/profile') }}">Vickie Bryant</a>
                                </h4>
                                <p class="small-text">General Doctor</p>
                                <p class="divider_30">
                                    Ham hock tenderloin beef ribs strip steak meatball pork chuck capicola andouille. Shoulder ground round.
                                </p>
                                <hr class="divider_15">
                                <div class="media inline-block margin_0">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 254 4512
                                    </div>
                                </div>
                                <p class="social-icons greylinks margin_0">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="isotope-item col-md-4 col-sm-6">
                        <div class="thumbnail text-center">
                            <img src="{{ asset('theme/images/team/02.jpg') }}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Geraldine Graham</a>
                                </h4>
                                <p class="small-text">Dental surgeon</p>
                                <p class="divider_30">
                                    Short loin tenderloin ball tip meatloaf t-bone salami porchetta picanha cow shank shoulder meatball. Meatball bacon short loin.
                                </p>
                                <hr class="divider_15">
                                <div class="media inline-block margin_0">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 895 4575
                                    </div>
                                </div>
                                <p class="social-icons greylinks margin_0">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="isotope-item col-md-4 col-sm-6">
                        <div class="thumbnail text-center">
                            <img src="{{ asset('theme/images/team/03.jpg') }}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Valerie Farmer</a>
                                </h4>
                                <p class="small-text">Cosmetic Surgeon</p>
                                <p class="divider_30">
                                    Tail doner kevin prosciutto bacon andouille frankfurter shoulder pork chop cupim landjaeger turducken. Meatloaf short ribs.
                                </p>
                                <hr class="divider_15">
                                <div class="media inline-block margin_0">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 456 5484
                                    </div>
                                </div>
                                <p class="social-icons greylinks margin_0">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="isotope-item col-md-4 col-sm-6">
                        <div class="thumbnail text-center">
                            <img src="{{ asset('theme/images/team/04.jpg') }}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Eloise Stephens</a>
                                </h4>
                                <p class="small-text">Therapy</p>
                                <p class="divider_30">
                                    Ribeye sirloin salami, shoulder andouille jerky beef flank swine. Prosciutto spare ribs filet mignon tenderloin.
                                </p>
                                <hr class="divider_15">
                                <div class="media inline-block margin_0">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 800 7000
                                    </div>
                                </div>
                                <p class="social-icons greylinks margin_0">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="isotope-item col-md-4 col-sm-6">
                        <div class="thumbnail text-center">
                            <img src="{{ asset('theme/images/team/05.jpg') }}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Robin Ramsey</a>
                                </h4>
                                <p class="small-text">General Doctor</p>
                                <p class="divider_30">
                                    Turkey cow picanha, capicola shoulder short ribs bacon. Tenderloin alcatra turducken hamburger, boudin pancetta.
                                </p>
                                <hr class="divider_15">
                                <div class="media inline-block margin_0">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 254 4512
                                    </div>
                                </div>
                                <p class="social-icons greylinks margin_0">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="isotope-item col-md-4 col-sm-6">
                        <div class="thumbnail text-center">
                            <img src="{{ asset('theme/images/team/06.jpg') }}" alt="" class="rounded">
                            <div class="caption">
                                <h4>
                                    <a href="team-single.html">Claudia Ortiz</a>
                                </h4>
                                <p class="small-text">gynecologist</p>
                                <p class="divider_30">
                                    Filet mignon andouille brisket, bacon pig meatloaf sausage jowl ribeye kielbasa chuck. Jerky turkey bacon cupim sausage.
                                </p>
                                <hr class="divider_15">
                                <div class="media inline-block margin_0">
                                    <div class="media-left">
                                        <i class="rt-icon2-phone3"></i>
                                    </div>
                                    <div class="media-body yantramanov">
                                        1 (800) 550 5500
                                    </div>
                                </div>
                                <p class="social-icons greylinks margin_0">
                                    <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- eof .isotope_container.row -->

            </div>
        </div>
    </div>
</section>

@endsection