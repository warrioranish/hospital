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
                        <h4 class="card-title"><b><a href="{{ route('services') }}">Services</a></b> / edit</h4>
                        <br>
                        <div class="card-content">
                            <div class="container-fluid">
                                <div class="alert alert-info alert-with-icon text-center flash-message" data-notify="container">
                                    <i class="material-icons" data-notify="icon">warning</i>
                                    <span data-notify="message">Please Note that fields marked with [*] are mandatory.</span>
                                    @if(count($errors))
                                        @foreach($errors->all() as $error)
                                            <span data-notify="message">{{ $error }}</span><br>
                                        @endforeach
                                    @endif
                                </div>
                                <form id="edit_form" class="form-horizontal" method="POST" action="{{ route('updateservices', ['id' => $service->id]) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">title <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group label-floating is-empty">
                                                <input type="text" name="title" value="{{ $service->title }}" class="form-control" autocomplete="off">
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
                                                    <img src="{{ asset('uploads/images/services/icon/'.$service->icons) }}" alt="" class="thumbnail">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div class="upload">
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
                                                <textarea name="caption" class="form-control" id="" cols="30" rows="5" required>{{ $service->caption }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Image <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{ asset('uploads/images/services/image/'.$service->image) }}" alt="">
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
                                        <label class="col-md-1 label-on-left">Description<span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <textarea name="service_description" id="service_description">{{ $service->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Status <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status" value="1" {{ ($service->status == 1) ? 'checked="true"' : '' }}> active &nbsp;
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status" value="0" {{ ($service->status == 0) ? 'checked="true"' : '' }}> inactive
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
        var editor = CKEDITOR.replace('service_description');
        editor.on('change', function(evt) { $('#service_description').html(this.getData().toString());});

        $('#submit_btn').click(function() {
            CKEDITOR.instances.service_description.updateElement();
        });

        $('#edit_form').validate({
            ignore: [],
            rules: {
                title: {
                    required: true
                },
                caption: {
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
                caption: {
                    required: 'Caption field is required'
                },
                service_description: {
                    required: 'Description field is required'
                }
            }
        });
    </script>
@endsection
