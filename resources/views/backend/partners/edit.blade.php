@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="purple">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <h4 class="card-title"><a href="{{ route('partners') }}">Partners</a> / edit</h4>
                        <br>
                        <div class="card-content">
                            <div class="container-fluid">
                                <form class="form-horizontal" method="POST" action="{{ route('updatepartners', ['id' => $partner->id]) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Name <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group label-floating is-empty">
                                                <input type="text" name="name" class="form-control" value="{{$partner->name}}" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Image</label>
                                        <div class="col-md-11">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{ asset('uploads/images/partners/'.$partner->image) }}" alt="">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div class="upload">
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="image"/>
                                                    </span>
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">url</label>
                                        <div class="col-md-11">
                                            <div>
                                                <input type="text" name="url" class="form-control" value="{{($partner->url == 'javascript:void(0)') ? '' : $partner->url}}" autocomplete="off" placeholder="#">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Status <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status" value="1" {{ ($partner->status == true) ? 'checked=true' : '' }}checked="true"> active &nbsp;
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status" value="0" {{ ($partner->status == false) ? 'checked=true' : '' }}> inactive
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
