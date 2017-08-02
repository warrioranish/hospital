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
                        <li class="active"> Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    @if($gallery)
        <section class="ls section_padding_top_100 section_padding_bottom_90">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <div id="gallery-owl-carousel" class="owl-carousel" data-dots="true" data-items="1" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">
                            @foreach($gallery as $g)
                                <div class="vertical-item content-padding gallery-extended-item with_background bottom-rounded text-center">
                                    <div class="item-media">
                                        <?php $random_image = RandomImage($g->id);?>
                                        <img src="{{asset('uploads/images/gallery/'.$random_image['image'])}}" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="view image" href="{{ url('/gallery/single/'.$random_image['slug']) }}"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                                <span class="categories-links small-text highlight3">
                                                    <a rel="category" href="{{ url('/gallery/'.$g->slug) }}">{{ $g->name }}</a>
                                                </span>
                                        <h3 class="item-title topmargin_0">
                                            <a href="{{ url('/gallery/single/'.$random_image['slug']) }}">{{$random_image['title'] }}</a>
                                        </h3>

                                        <p>{!! $random_image['description'] !!}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>


                </div>
            </div>
        </section>
    @endif
@endsection