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
                        <li class="active">{{ $gallery_name }} lists</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls page_portfolio section_padding_top_100 section_padding_bottom_90">
        <div class="container">
            <div class="row">
                @if($images)
                    <div class="col-sm-12">

                    {{--<div class="filters isotope_filters text-center widget_tag_cloud">--}}
                        {{--<a href="#" data-filter="*" class="selected">All</a>--}}
                        {{--<a href="#" data-filter=".medical">Medical treatment</a>--}}
                        {{--<a href="#" data-filter=".general">General analysis</a>--}}
                        {{--<a href="#" data-filter=".laboratory">Laboratory test</a>--}}
                        {{--<a href="#" data-filter=".symptom">Symptom Check</a>--}}
                    {{--</div>--}}

                    <div class="isotope_container isotope row masonry-layout columns_margin_top_0 columns_margin_bottom_30" data-filters=".isotope_filters">
                        @foreach($images as $img)
                            <div class="isotope-item col-lg-4 col-md-6 col-sm-12 medical">
                                <div class="vertical-item gallery-item content-absolute text-center cs">
                                    <div class="item-media">
                                        <img src="{{ asset('uploads/images/gallery/'.$img->image) }}" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="p-view prettyPhoto " title="slideshow {{ GalleryNameAndId($img->id)['name'] }}" data-gal="prettyPhoto[gal]" href="{{ asset('uploads/images/gallery/'.$img->image) }}"></a>
                                                <a class="p-link" title="view image" href="{{ url('/gallery/single/'.$img->slug) }}"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-meta greylinks">
                                            <a href="gallery-single.html">{{ $img->title }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- eof .isotope_container.row -->

                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="topmargin_10">
                                <ul class="pagination">
                                    <li>
                                        <a href="#">Prev</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                @endif
            </div>
        </div>
    </section>

@endsection