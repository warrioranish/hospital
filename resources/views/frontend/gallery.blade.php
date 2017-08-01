@extends('frontend.layouts.index')

@section('content')

    <section class="page_breadcrumbs ls ms ms2 section_padding_15 columns_margin_0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <ol class="breadcrumb greylinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Gallery</a>
                        </li>
                        <li class="active"> Gallery Regular 1 column</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="ls page_portfolio section_padding_top_100 section_padding_bottom_90">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-push-2">

                    <div class="filters isotope_filters text-center widget_tag_cloud">
                        <a href="#" data-filter="*" class="selected">All</a>
                        @if($gallery)
                            @foreach($gallery as $g)
                                <a href="#" data-filter=".{{ $g->id }}">{{ $g->name }}</a>
                            @endforeach
                        @endif
                    </div>

                    <div class="isotope_container isotope row masonry-layout columns_margin_top_0 columns_margin_bottom_30" data-filters=".isotope_filters">
                        @if($images)
                            @foreach($images as $i)
                                <div class="isotope-item col-lg-12 col-md-12 col-sm-12 {{ GalleryNameAndId($i->id)['gallery_id'] }}">
                                    <div class="vertical-item gallery-item content-absolute text-center cs">
                                        <div class="item-media">
                                            <img src="{{ asset('uploads/images/gallery/'.$i->image) }}" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto}}" title="slide show" data-gal="prettyPhoto[gal]" href="{{ asset('uploads/images/gallery/'.$i->image) }}"></a>
                                                    <a class="p-link" title="view image" href="{{ url('/gallery/single/'.$i->id) }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <h4 class="item-meta greylinks">
                                                <a href="gallery-single.html">{{ $i->title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{--<div class="isotope-item col-lg-12 col-md-12 col-sm-12 general">--}}
                            {{--<div class="vertical-item gallery-item content-absolute text-center cs">--}}
                                {{--<div class="item-media">--}}
                                    {{--<img src="{{ asset('theme/images/gallery/gallery02.gif') }}" alt="">--}}
                                    {{--<div class="media-links">--}}
                                        {{--<div class="links-wrap">--}}
                                            {{--<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('theme/images/gallery/gallery02.gif') }}"></a>--}}
                                            {{--<a class="p-link" title="view image" href="gallery-single.html"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item-content">--}}
                                    {{--<h4 class="item-meta greylinks">--}}
                                        {{--<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="isotope-item col-lg-12 col-md-12 col-sm-12 medical">--}}
                            {{--<div class="vertical-item gallery-item content-absolute text-center cs">--}}
                                {{--<div class="item-media">--}}
                                    {{--<img src="{{ asset('theme/images/gallery/gallery03.jpg') }}" alt="">--}}
                                    {{--<div class="media-links">--}}
                                        {{--<div class="links-wrap">--}}
                                            {{--<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('theme/images/gallery/gallery03.jpg') }}"></a>--}}
                                            {{--<a class="p-link" title="" href="gallery-single.html"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item-content">--}}
                                    {{--<h4 class="item-meta greylinks">--}}
                                        {{--<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="isotope-item col-lg-12 col-md-12 col-sm-12 laboratory">--}}
                            {{--<div class="vertical-item gallery-item content-absolute text-center cs">--}}
                                {{--<div class="item-media">--}}
                                    {{--<img src="{{ asset('theme/images/gallery/04.jpg') }}" alt="">--}}
                                    {{--<div class="media-links">--}}
                                        {{--<div class="links-wrap">--}}
                                            {{--<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/04.jpg"></a>--}}
                                            {{--<a class="p-link" title="" href="gallery-single.html"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item-content">--}}
                                    {{--<h4 class="item-meta greylinks">--}}
                                        {{--<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="isotope-item col-lg-12 col-md-12 col-sm-12 laboratory">--}}
                            {{--<div class="vertical-item gallery-item content-absolute text-center cs">--}}
                                {{--<div class="item-media">--}}
                                    {{--<img src="{{ asset('theme/images/gallery/05.jpg') }}" alt="">--}}
                                    {{--<div class="media-links">--}}
                                        {{--<div class="links-wrap">--}}
                                            {{--<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/05.jpg"></a>--}}
                                            {{--<a class="p-link" title="" href="gallery-single.html"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item-content">--}}
                                    {{--<h4 class="item-meta greylinks">--}}
                                        {{--<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="isotope-item col-lg-12 col-md-12 col-sm-12 laboratory">--}}
                            {{--<div class="vertical-item gallery-item content-absolute text-center cs">--}}
                                {{--<div class="item-media">--}}
                                    {{--<img src="{{ asset('theme/images/gallery/06.jpg') }}" alt="">--}}
                                    {{--<div class="media-links">--}}
                                        {{--<div class="links-wrap">--}}
                                            {{--<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/06.jpg"></a>--}}
                                            {{--<a class="p-link" title="" href="gallery-single.html"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item-content">--}}
                                    {{--<h4 class="item-meta greylinks">--}}
                                        {{--<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="isotope-item col-lg-12 col-md-12 col-sm-12 general">--}}
                            {{--<div class="vertical-item gallery-item content-absolute text-center cs">--}}
                                {{--<div class="item-media">--}}
                                    {{--<img src="{{ asset('theme/images/gallery/07.jpg') }}" alt="">--}}
                                    {{--<div class="media-links">--}}
                                        {{--<div class="links-wrap">--}}
                                            {{--<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/07.jpg"></a>--}}
                                            {{--<a class="p-link" title="" href="gallery-single.html"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item-content">--}}
                                    {{--<h4 class="item-meta greylinks">--}}
                                        {{--<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="isotope-item col-lg-12 col-md-12 col-sm-12 medical">--}}
                            {{--<div class="vertical-item gallery-item content-absolute text-center cs">--}}
                                {{--<div class="item-media">--}}
                                    {{--<img src="{{ asset('theme/images/gallery/08.jpg') }}" alt="">--}}
                                    {{--<div class="media-links">--}}
                                        {{--<div class="links-wrap">--}}
                                            {{--<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/08.jpg"></a>--}}
                                            {{--<a class="p-link" title="" href="gallery-single.html"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item-content">--}}
                                    {{--<h4 class="item-meta greylinks">--}}
                                        {{--<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="isotope-item col-lg-12 col-md-12 col-sm-12 laboratory">--}}
                            {{--<div class="vertical-item gallery-item content-absolute text-center cs">--}}
                                {{--<div class="item-media">--}}
                                    {{--<img src="{{ asset('theme/images/gallery/09.jpg') }}" alt="">--}}
                                    {{--<div class="media-links">--}}
                                        {{--<div class="links-wrap">--}}
                                            {{--<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/09.jpg"></a>--}}
                                            {{--<a class="p-link" title="" href="gallery-single.html"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item-content">--}}
                                    {{--<h4 class="item-meta greylinks">--}}
                                        {{--<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="isotope-item col-lg-12 col-md-12 col-sm-12 laboratory">--}}
                            {{--<div class="vertical-item gallery-item content-absolute text-center cs">--}}
                                {{--<div class="item-media">--}}
                                    {{--<img src="{{ asset('theme/images/gallery/10.jpg') }}" alt="">--}}
                                    {{--<div class="media-links">--}}
                                        {{--<div class="links-wrap">--}}
                                            {{--<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/10.jpg"></a>--}}
                                            {{--<a class="p-link" title="" href="gallery-single.html"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item-content">--}}
                                    {{--<h4 class="item-meta greylinks">--}}
                                        {{--<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="isotope-item col-lg-12 col-md-12 col-sm-12 symptom">--}}
                            {{--<div class="vertical-item gallery-item content-absolute text-center cs">--}}
                                {{--<div class="item-media">--}}
                                    {{--<img src="{{ asset('theme/images/gallery/11.jpg') }}" alt="">--}}
                                    {{--<div class="media-links">--}}
                                        {{--<div class="links-wrap">--}}
                                            {{--<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/11.jpg"></a>--}}
                                            {{--<a class="p-link" title="" href="gallery-single.html"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item-content">--}}
                                    {{--<h4 class="item-meta greylinks">--}}
                                        {{--<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="isotope-item col-lg-12 col-md-12 col-sm-12 general">--}}
                            {{--<div class="vertical-item gallery-item content-absolute text-center cs">--}}
                                {{--<div class="item-media">--}}
                                    {{--<img src="{{ asset('theme/images/gallery/12.jpg') }}" alt="">--}}
                                    {{--<div class="media-links">--}}
                                        {{--<div class="links-wrap">--}}
                                            {{--<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/12.jpg"></a>--}}
                                            {{--<a class="p-link" title="" href="gallery-single.html"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item-content">--}}
                                    {{--<h4 class="item-meta greylinks">--}}
                                        {{--<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

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
            </div>
        </div>
    </section>

@endsection