@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="green">
                            <i class="material-icons">insert_photo</i>
                        </div>
                        <h4 class="card-title"><b><a href="{{ route('gallery') }}">Gallery</a></b> / <b><a href="{{ route('images', ['id' => $galleryId]) }}"> {{ $galleryName }}</a></b> / edit</h4>
                        <br>
                        <div class="card-content">
                            <div class="container-fluid">
                                <form id="edit_form" class="form-horizontal" method="POST" action="{{ route('updateimages', ['id' => $image->id]) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">title <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group label-floating is-empty">
                                                <input type="text" name="title" class="form-control" value="{{ $image->title }}" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Image</label>
                                        <div class="col-md-11">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new">
                                                    <img src="{{ asset('uploads/images/gallery/'.$image->image) }}" style="width:500px;" alt="">
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
                                                <textarea name="description" id="image_description">{!! $image->description !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Status <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status" value="1" {{ ($image->status == 1) ? 'checked="true"' : '' }}> active &nbsp;
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status" value="0" {{ ($image->status == 0) ? 'checked="true"' : '' }}> inactive
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
        var editor = CKEDITOR.replace('image_description');
        editor.on('change', function(evt) { $('#image_description').html(this.getData().toString());});

        $('#submit_btn').click(function () {
            CKEDITOR.instances.image_description.updateElement();
        });

        $('#edit_form').validate({
            ignore: [],
            rules: {
                title: {
                    required: true
                },
                description: {
                    required: true
                }
            },
            messages: {
                title: {
                    required: 'Title field is required'
                },
                description: {
                    required: 'Description field is required'
                }
            }
        });
    </script>
@endsection
