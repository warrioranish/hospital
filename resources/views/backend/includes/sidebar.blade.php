<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="/home" target="_blank" class="simple-text">
            Example
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="http://www.creative-tim.com" class="simple-text">
            Example
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{asset('assets/img/faces/logo.png')}}"/>
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">

                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">My Profile</a>
                        </li>
                        <li>
                            <a href="#">Edit Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('settings') }}">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#editorsHospital">
                    <i class="material-icons">person_add</i>
                    <p>Editors
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="editorsHospital">
                    <ul class="nav">
                        <li>
                            <a href="#">List All</a>
                        </li>
                        <li>
                            <a href="#">Add Editors</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#slidersHospital">
                    <i class="material-icons">code</i>
                    <p>Sliders
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="slidersHospital">
                    <ul class="nav">
                        <li>
                            <a href="{{route('sliders')}}">List All</a>
                        </li>
                        <li>
                            <a href="{{route('createsliders')}}">Add Sliders</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#galleryHospital">
                    <i class="material-icons">insert_photo</i>
                    <p>Gallery
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="galleryHospital">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('gallery') }}">List All</a>
                        </li>
                        <li>
                            <a href="">Add Gallery</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#contactsHospital">
                    <i class="material-icons">contacts</i>
                    <p>Contact us
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="contactsHospital">
                    <ul class="nav">
                        <li>
                            <a href="{{route('contacts')}}">List All</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#testimonials">
                    <i class="fa fa-quote-right"></i>
                    <p>Testimonials
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="testimonials">
                    <ul class="nav">
                        <li>
                            <a href="{{route('testimonials')}}">List All</a>
                        </li>
                        <li>
                            <a href="{{route('createtestimonials')}}">Add Testimonials</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#partners">
                    <i class="fa fa-handshake-o"></i>
                    <p>Partners
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="partners">
                    <ul class="nav">
                        <li>
                            <a href="{{route('partners')}}">List All</a>
                        </li>
                        <li>
                            <a href="{{route('createpartners')}}">Add Partners</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#faq">
                    <i class="material-icons">question_answer</i>
                    <p>FAQ
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="faq">
                    <ul class="nav">
                        <li>
                            <a href="{{route('faq')}}">List All</a>
                        </li>
                        <li>
                            <a href="{{route('createfaqs')}}">Add Faqs</a>
                        </li>
                    </ul>

                </div>

            </li>
        </ul>
    </div>
</div>