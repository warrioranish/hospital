@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">settings</i>
                        </div>
                        <h4 class="card-title"><b><a href="{{ route('services') }}">Services</a></b> / add</h4>
                        <br>
                        <div class="card-content">
                            <div class="container-fluid">
                                <div class="alert alert-info alert-with-icon text-center flash-message" data-notify="container">
                                    <i class="material-icons" data-notify="icon">warning</i>
                                    <span data-notify="message">Please Note that fields marked with [*] are mandatory.</span>
                                    @if(count($errors))
                                        @foreach($errors->all() as $error)
                                            <span data-notify="message">{{ $error }}</span>
                                        @endforeach
                                    @endif
                                </div>
                                <form class="form-horizontal" id="add_form" method="POST" action="{{ route('storeservices') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">title <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group label-floating is-empty">
                                                <input type="text" name="title" value="{{ old('title') }}" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label class="col-md-12 text-center">Please use .png image with transparent background for icon</label>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Icon <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">

                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div class="upload icon">
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select icon</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="icon"/>
                                                    </span>
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">caption <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group label-floating is-empty">
                                                <textarea name="caption" class="form-control" id="" cols="30" rows="5" required>{{ old('caption') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Image <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">

                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div class="upload image">
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
                                        <label class="col-md-1 label-on-left">Description<span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <textarea name="service_description" id="service_description">{{ old('service_description') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Status <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status" value="1" checked="true"> active &nbsp;
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status" value="0"> inactive
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1"></label>
                                        <div class="col-md-11">
                                            <div class="form-group form-button">
                                                <button type="submit" id="submit_btn" class="btn btn-fill btn-rose">Submit</button>
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
    <script>
        CKEDITOR.replace('service_description');

        $('#submit_btn').click(function(){
          CKEDITOR.instances.service_description.updateElement();
        });

        $('#add_form').validate({
            ignore: [],
            rules: {
                title: {
                    required: true
                },
                icon: {
                    required: true
                },
                caption: {
                    required: true
                },
                image: {
                    required: true
                },
                service_description:{
                    required: true
                }
            },
            messages: {
                title: {
                    required: 'Title field is required'
                },
                icon: {
                    required: 'Icon is required'
                },
                caption: {
                    required: 'Caption field is required'
                },
                image: {
                    required: 'Image is required'
                },
                service_description: {
                    required: 'Description field is required'
                }
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "icon") {
                    error.insertAfter(".icon");
                } else if( element.attr("name") == "image") {
                    error.insertAfter(".image");
                }else {
                    error.appendTo(element.parent("div"));
                }
            }
        });
    </script>
@endsection
