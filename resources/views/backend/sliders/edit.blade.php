@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="orange">
                            <i class="material-icons">code</i>
                        </div>
                        <h4 class="card-title">Sliders / edit</h4>
                        <br>
                        <div class="card-content">
                            <div class="container-fluid">
                                <form class="form-horizontal" method="POST" action="{{ url('admin/sliders/update/'.$slider->id) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Name <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group label-floating is-empty">
                                                <input type="text" name="name" class="form-control" value="{{$slider->name}}" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left"></label>
                                        <div class="col-md-11">
                                            <img src="{{ asset('/uploads/images/sliders/'.$slider->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Image</label>
                                        <div class="col-md-11">
                                            <div>
                                                <label class="control-label"></label>
                                                <input type="file" name="image" value="upload">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Caption1<span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" name="caption1" class="form-control" value="{{$slider->caption1}}" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Caption2<span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" name="caption2" class="form-control" value="{{$slider->caption2}}" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Status <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status" value="1" {{ ($slider->status == 1) ? 'checked=true' : '' }}> active &nbsp;
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status" value="0" {{ ($slider->status == 0) ? 'checked=true' : '' }}> inactive
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1"></label>
                                        <div class="col-md-11">
                                            <div class="form-group form-button">
                                                <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
