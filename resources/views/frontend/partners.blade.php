@if($partners)
    <section class="ls section_padding_25">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="owl-carousel partners-carousel" data-responsive-lg="6" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="2">
                        @foreach($partners as $p)
                            <a href="{{$p->url}}" target="_blank">
                                <img src="{{asset('uploads/images/partners/'.$p->image)}}" alt="" />
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif