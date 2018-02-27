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
                        <li class="active"> FAQ </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="ls section_padding_50 columns_padding_25">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header small">
                        Got Questions? We've Got Answers!
                    </h2>
                    {{--<p>--}}
                        {{--At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum dolor sit amet.--}}
                    {{--</p>--}}
                </div>
            </div>
            <div class="row vertical-tabs">
                <div class="col-sm-5">

                    <!-- Nav tabs -->
                    <ul class="nav" role="tablist">
                        @foreach($faq as $k=>$v)
                        <li {{ ($k==0) ? "class=active" : "" }}>
                            <a href="#vertical-tab{{ $v->id }}" role="tab" data-toggle="tab">{{ $v->question }}</a>
                        </li>
                        @endforeach
                    </ul>

                </div>

                <div class="col-sm-7">

                    <!-- Tab panes -->
                    <div class="tab-content no-border">
                        @foreach($faq as $k=>$v)
                            <div class="tab-pane fade in {{ ($k == 0) ? "active" : ""}}" id="vertical-tab{{ $v->id }}">
                                <h3 class="topmargin_0">{{ $v->question }}</h3>
                                {!! $v->answer !!}
                            </div>
                        @endforeach
                    </div>

                </div>


            </div>

        </div>
    </section>

@endsection