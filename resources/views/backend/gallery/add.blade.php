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
                        <h4 class="card-title"><a href="{{ route('gallery') }}">Gallery</a> / <a href="{{ route('images', ['id' => $gallery->id]) }}">{{ $gallery->name }}</a> /add</h4>
                        <br>
                        <div class="card-content">
                            <div class="container-fluid">
                                <form id="add_form" class="form-horizontal" method="POST" action="{{ route('storegallery') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Title<span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group label-floating is-empty">
                                                <input type="text" name="name" class="form-control" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Image <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div>
                                                <label class="control-label"></label>
                                                <input type="file" name="image" value="upload" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Description<span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <textarea name="description" id="image_description"></textarea>
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

    <script>
        CKEDITOR.replace('image_description');


    </script>

@endsection
