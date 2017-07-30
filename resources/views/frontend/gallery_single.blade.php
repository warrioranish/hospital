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
                        <li class="active"> Single Item</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_75 section_padding_bottom_100">
        <div class="container">
            <div class="row">

                <div class="col-md-10 col-md-push-1 text-center">

                    <h1 class="section_header">
                        Image title
                    </h1>

                    <div class="categories-links highlight3 small-text highlight3 bottommargin_40">
                        <a rel="category" href="blog-right.html">Category 1</a>
                        <a rel="category" href="blog-right.html">Category 2</a>
                    </div>

                    <div class="vertical-item gallery-extended-item content-padding with_background bottom-rounded">
                        <div class="item-media">
                            <img src="{{ url('theme/images/gallery/gallery01.jpg') }}" alt="">
                        </div>
                        <div class="item-content text-center">

                            <p class="entry-excerpt">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste placeat, deleniti. Veritatis, praesentium, et! Voluptate iusto aliquid quis, optio dolore quas non eveniet aut.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque debitis fuga eum, velit deleniti perferendis fugit necessitatibus inventore expedita accusantium animi provident aspernatur, accusamus in nobis illo? Exercitationem, deserunt esse. Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Amet minima laboriosam dolores sunt pariatur quia, non maxime excepturi expedita, animi rem earum temporibus quidem molestias. Aut blanditiis, nulla esse accusamus. Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Amet minima laboriosam dolores sunt pariatur quia, non maxime excepturi expedita, animi rem earum temporibus quidem molestias. Aut blanditiis, nulla esse accusamus.
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

    <section class="ls section_padding_100">
        <div class="owl-carousel related-photos-carousel" data-margin="0" data-nav="true" data-loop="true" data-items="3">

            <div>
                <div class="vertical-item gallery-title-item content-absolute">
                    <div class="item-media">
                        <img src="{{ asset('theme/images/gallery/gallery01.jpg') }}" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/01.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-title text-center">
                    <h3>
                        <a href="gallery-single.html">Consetetur sadipscing</a>
                    </h3>
                    <span class="categories-links highlight3 small-text">
								<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
							</span>
                </div>
            </div>

            <div>
                <div class="vertical-item gallery-title-item content-absolute">
                    <div class="item-media">
                        <img src="images/gallery/02.jpg" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/02.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-title text-center">
                    <h3>
                        <a href="gallery-single.html">Consetetur sadipscing</a>
                    </h3>
                    <span class="categories-links highlight3 small-text">
								<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
							</span>
                </div>
            </div>

            <div>
                <div class="vertical-item gallery-title-item content-absolute">
                    <div class="item-media">
                        <img src="images/gallery/03.jpg" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/03.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-title text-center">
                    <h3>
                        <a href="gallery-single.html">Consetetur sadipscing</a>
                    </h3>
                    <span class="categories-links highlight3 small-text">
								<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
							</span>
                </div>
            </div>

            <div>
                <div class="vertical-item gallery-title-item content-absolute">
                    <div class="item-media">
                        <img src="images/gallery/03.jpg" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/03.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-title text-center">
                    <h3>
                        <a href="gallery-single.html">Consetetur sadipscing</a>
                    </h3>
                    <span class="categories-links highlight3 small-text">
								<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
							</span>
                </div>
            </div>

            <div>
                <div class="vertical-item gallery-title-item content-absolute">
                    <div class="item-media">
                        <img src="images/gallery/04.jpg" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/04.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-title text-center">
                    <h3>
                        <a href="gallery-single.html">Consetetur sadipscing</a>
                    </h3>
                    <span class="categories-links highlight3 small-text">
								<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
							</span>
                </div>
            </div>

            <div>
                <div class="vertical-item gallery-title-item content-absolute">
                    <div class="item-media">
                        <img src="images/gallery/05.jpg" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/05.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-title text-center">
                    <h3>
                        <a href="gallery-single.html">Consetetur sadipscing</a>
                    </h3>
                    <span class="categories-links highlight3 small-text">
								<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
							</span>
                </div>
            </div>

            <div>
                <div class="vertical-item gallery-title-item content-absolute">
                    <div class="item-media">
                        <img src="images/gallery/06.jpg" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/06.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-title text-center">
                    <h3>
                        <a href="gallery-single.html">Consetetur sadipscing</a>
                    </h3>
                    <span class="categories-links highlight3 small-text">
								<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
							</span>
                </div>
            </div>

            <div>
                <div class="vertical-item gallery-title-item content-absolute">
                    <div class="item-media">
                        <img src="images/gallery/07.jpg" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/07.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-title text-center">
                    <h3>
                        <a href="gallery-single.html">Consetetur sadipscing</a>
                    </h3>
                    <span class="categories-links highlight3 small-text">
								<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
							</span>
                </div>
            </div>

            <div>
                <div class="vertical-item gallery-title-item content-absolute">
                    <div class="item-media">
                        <img src="images/gallery/08.jpg" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/08.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-title text-center">
                    <h3>
                        <a href="gallery-single.html">Consetetur sadipscing</a>
                    </h3>
                    <span class="categories-links highlight3 small-text">
								<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
							</span>
                </div>
            </div>
        </div>


    </section>

@endsection