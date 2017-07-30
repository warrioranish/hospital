@if($sliders)
<section class="intro_section page_mainslider">
    <div class="flexslider">
        <ul class="slides">
            @foreach($sliders as $s)
                <li>
                    <img src="{{asset('uploads/images/sliders/'.$s->image)}}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description highlight">
                                        <div class="intro-layer" data-animation="fadeInLeft">
                                            <p class="yantramanov text-uppercase fontsize_35">
                                               {{$s->caption1}}
                                            </p>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInRight">
                                            <p class="text-uppercase yantramanov big">
                                                {{$s->caption2}}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
            @endforeach
        </ul>
    </div>
    <!-- eof flexslider -->
</section>
@endif