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
                        <a href="#">Services</a>
                    </li>
                    <li class="active"> Cardio Monitoring</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls ms section_padding_top_150 section_padding_bottom_100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section_header">Our Departments</h2>
                <p class="bottommargin_30 bold">
                    Pork chop tenderloin ham, cupidatat exercitation id dolore andouille hamburger porchetta enim aliqua tongue. Adipisicing quis anim, shankle aliqua doner eu.
                </p>
            </div>
        </div>
        <div class="isotope_container isotope row masonry-layout columns_margin_bottom_40 topmargin_30">
            <div class="col-md-4 col-sm-6 isotope-item">
                <article class="vertical-item content-padding with_background text-center">
                    <div class="item-media">
                        <img src="{{ asset('theme/images/gallery/12.jpg') }}" alt="" />
                    </div>
                    <div class="item-content">
                        <h4 class="entry-title bottommargin_30">
                            <a href="{{ url('departments/members') }}">Primary Health Care</a>
                        </h4>
                        <p>
                            Fatback pork belly frankfurter tri-tip bresaola picanha. Ground round andouille pork picanha cupim
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 isotope-item">
                <article class="vertical-item content-padding with_background text-center">
                    <div class="item-media">
                        <img src="{{ asset('theme/images/gallery/11.jpg') }}" alt="" />
                    </div>
                    <div class="item-content">
                        <h4 class="entry-title bottommargin_30">
                            <a href="#">Gynaecological Clinic</a>
                        </h4>
                        <p>
                            Shoulder picanha jowl strip steak venison. Sakle pork belly landjaeger ball tip pork ribeye rump
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 isotope-item">
                <article class="vertical-item content-padding with_background text-center">
                    <div class="item-media">
                        <img src="{{ asset('theme/images/gallery/02.jpg') }}" alt="" />
                    </div>
                    <div class="item-content">
                        <h4 class="entry-title bottommargin_30">
                            <a href="#">Diagnosis With Precise</a>
                        </h4>
                        <p>
                            Hamburger pancetta capicola porchetta t-bone shoulder bacon biltong cow kielbasa
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 isotope-item">
                <article class="vertical-item content-padding with_background text-center">
                    <div class="item-media">
                        <img src="{{ asset('theme/images/gallery/03.jpg') }}" alt="" />
                    </div>
                    <div class="item-content">
                        <h4 class="entry-title bottommargin_30">
                            <a href="#">Cardiac Clinic</a>
                        </h4>
                        <p>
                            Pancetta brisket cupim capicola short ribs beef ribs. Sausage kielbasa tri-tip spare ribs, tail rump ground
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 isotope-item">
                <article class="vertical-item content-padding with_background text-center">
                    <div class="item-media">
                        <img src="{{ asset('theme/images/gallery/06.jpg') }}" alt="" />
                    </div>
                    <div class="item-content">
                        <h4 class="entry-title bottommargin_30">
                            <a href="#">General Surgery</a>
                        </h4>
                        <p>
                            Shank cow pork chop hamburger capicola ball tip bresaola pastrami short loin biltong
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 isotope-item">
                <article class="vertical-item content-padding with_background text-center">
                    <div class="item-media">
                        <img src="{{ asset('theme/images/gallery/01.jpg') }}" alt="" />
                    </div>
                    <div class="item-content">
                        <h4 class="entry-title bottommargin_30">
                            <a href="#">Rehabilitation Studio</a>
                        </h4>
                        <p>
                            Jerky brisket turducken, chop andouille shankle turkey ball tip biltong bresaola capicola
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection