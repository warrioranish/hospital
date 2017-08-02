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
                        <li>
                            <a href="{{ url('/gallery') }}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ url('/gallery/'.$gallery['slug']) }}"> {{ $gallery['name'] }}</a>
                        </li>
                        <li class="active"> {{ $image->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    @if($image)
        <section class="ls section_padding_top_75 section_padding_bottom_100">
            <div class="container">
                <div class="row">

                    <div class="col-md-10 col-md-push-1 text-center">

                        <h1 class="section_header">
                            {{ $image->title }}
                        </h1>

                        <div class="categories-links highlight3 small-text highlight3 bottommargin_40">
                            <a rel="category" href="{{ url('/gallery/'.$gallery['slug']) }}">{{ GalleryNameAndId($image->id)['name'] }}</a>
                        </div>

                        <div class="vertical-item gallery-extended-item content-padding with_background bottom-rounded">
                            <div class="item-media">
                                <img src="{{ asset('uploads/images/gallery/'.$image->image) }}" alt="">
                            </div>
                            <div class="item-content text-center">

                                <p>
                                    {!! $image->description  !!}
                                </p>

                                <div class="share-gallery-single">
                                    <a href="#" class="social-icon color-bg-icon soc-facebook"></a>
                                    <a href="#" class="social-icon color-bg-icon soc-twitter"></a>
                                    <a href="#" class="social-icon color-bg-icon soc-google"></a>
                                    <a href="#" class="social-icon color-bg-icon soc-linkedin"></a>
                                    <a href="#" class="social-icon color-bg-icon soc-pinterest"></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($gallery_images) > 3)
        <section class="ls section_padding_100">
            <div class="owl-carousel related-photos-carousel" data-margin="0" data-nav="true" data-loop="true" data-items="3">
                @foreach($gallery_images as $i=>$img)
                    <div>
                        <div class="vertical-item gallery-title-item content-absolute">
                            <div class="item-media">
                                <img src="{{ asset('uploads/images/gallery/'.$img->image) }}" alt="">
                                <div class="media-links">
                                    <div class="links-wrap">
                                        <a class="p-view prettyPhoto " title="slideshow {{ GalleryNameAndId($img->id)['name'] }}" data-gal="prettyPhoto[gal]" href="{{ asset('uploads/images/gallery/'.$img->image) }}"></a>
                                        <a class="p-link" title="view image" href="{{ url('/gallery/single/'.$img->slug) }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-title text-center">
                            <h3>
                                <a href="{{ url('/gallery/single/'.$img->slug) }}">{{ $img->title }}</a>
                            </h3>
                            <span class="categories-links highlight3 small-text">
                                <a rel="category" href="{{ url('/gallery/'.$gallery['slug']) }}">{{ GalleryNameAndId($img->id)['name'] }}</a>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>


    </section>
    @endif

@endsection