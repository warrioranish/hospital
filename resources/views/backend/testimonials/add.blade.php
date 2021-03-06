@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="blue">
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <h4 class="card-title"><a href="{{ route('testimonials') }}">Testimonials</a> / add</h4>
                        <br>
                        <div class="card-content">
                            <div class="container-fluid">
                                <form method="POST" action="{{route('storetestimonials')}}">
                                    {{csrf_field()}}
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name <span class="asterisk">*</span></label>
                                        <input type="text" name="name" class="form-control" autocomplete="off" required>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">position <span class="asterisk">*</span></label>
                                        <input type="text" name="position" class="form-control" autocomplete="off" required>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">testimonial <span class="asterisk">*</span></label>
                                        <textarea name="testimonial" class="form-control" id="" cols="30" rows="5" required></textarea>
                                        {{--<input type="text" name="testimonial" class="form-control" autocomplete="off" required>--}}
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" value="1" checked="true"> active
                                        </label>
                                        <label>
                                            <input type="radio" name="status" value="0"> inactive
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
