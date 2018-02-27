@if($testimonials)
    <section class="ds ms section_padding_150 parallax page_testimonials columns_margin_0">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h2 class="section_header highlight3">What people say About Valeo</h2>
                    <div class="owl-carousel topmargin_60" data-dots="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1">
                        @foreach($testimonials as $t)
                            <blockquote class="no-border">
                                <p class="yantramanov">“{{ $t->testimonial }}”</p>
                                <div class="item-meta small-text2">
                                    {{ $t->name }}/ {{ $t->position }}
                                </div>
                            </blockquote>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

