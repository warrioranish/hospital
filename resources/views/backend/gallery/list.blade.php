@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form name="content-list" id="content-list" action="{{ route('actionimages', ['id' => $gallery->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header card-header-icon" data-background-color="green">
                                <i class="material-icons">insert_photo</i>
                            </div>
                            <h4 class="card-title"><b><a href="{{ route('gallery') }}">Gallery</a></b> / {{ $gallery->name }}</h4>
                            <br>
                            <div class="card-content">
                                @if(session('status'))
                                    <div class="alert {{ (isset($_GET['delete'])) ? 'alert-danger' : 'alert-success' }} alert-with-icon text-center flash-message" data-notify="container">
                                        <i class="material-icons" data-notify="icon">notifications</i>
                                        <span data-notify="message">{{session('status')}}.</span>
                                    </div>
                                @endif
                                <div class="container-fluid">
                                    <a href="{{route('createimages', ['id' => $gallery->id])}}" class="btn btn-primary pull-right">Add Images</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th width="5%">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes" id="checkall">
                                                        </label>
                                                    </div>
                                                </th>
                                                <th width="20%">Title</th>
                                                <th width="20%">Thumbnail</th>
                                                <th width="25%">Description</th>
                                                <th width="10%">Status</th>
                                                <th width="15%">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @if(count($images) > 0 )
                                            @foreach($images as $i)
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="check[]" value="{{ $i->id }}" class="flag-check">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>{{$i->title}}</td>
                                                    <td><img class="thumbnail" src="{{ asset('uploads/images/gallery/'.$i->image) }}" alt=""></td>
                                                    <td>{!! str_limit($i->description, 100) !!}</td>
                                                    <td>{{($i->status == 1) ? "active" : "inactive"}}</td>
                                                    <td class="td-actions">
                                                        <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('admin/gallery/images/edit/'.$i->id) }}" title="edit image">
                                                            <i class="material-icons">edit</i>
                                                        </a>

                                                        <button type="button" rel="tooltip" class="btn btn-danger btn-round delete-image" title="delete image" data-href="{{ url('admin/gallery/images/delete/'.$i->id) }}"><i class="material-icons">delete</i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-center">
                                                    <h4>There are no images added yet, click <a href="{{route('createimages', ['id' => $gallery->id])}}">here</a> to add one</h4>
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @if(count($images) > 0 )
                                <div>
                                    <div class="col-lg-4 col-md-6 col-sm-3">
                                        <select class="selectpicker" data-style="btn btn-primary btn-round"
                                                title="Select Action" name="action" data-size="7">
                                            <option value="publish">Publish Selected Items</option>
                                            <option value="unpublish">Unpublish Selected Items</option>
                                            <option value="delete">Delete Selected Items</option>
                                        </select>
                                    </div>
                                    <button type="button" id="update" class="btn btn-fill btn-rose">Update</button>
                                </div>
                            @endif
                        </div>
                    </form>
                    @if(isset($images))
                        <div class="col-sm-12 text-center">
                            {{ $images->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <form id="delete_form" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>
    <script>
        $(function () {

            setTimeout(function(){
                $('.flash-message').slideUp(1500, 'swing');
            }, 1500);

            $('.delete-image').click(function() {
                var href = $(this).data('href');
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    confirmButtonText: 'Yes, delete it!',
                    buttonsStyling: false
                }).then(function(){
                    $('#delete_form').attr('action', href);
                    $('#delete_form').submit();
                });
            });

            $('#checkall').click(function () {
                var boxes = $(this).parents('.table').find('.flag-check');
                boxes.prop('checked', $(this).is(':checked'));
            });

            $('#update').click(function () {
                if($(".selectpicker").val() == '') {
                    swal({
                        title: "Action Not Selected!",
                        text: "Please select the action before applying changes to items",
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-info"
                    });
                } else {
                    if ($(".flag-check:checked").length < 1) {
                        swal({
                            title: "Nothing Selected!",
                            text: "Please select the items before applying action",
                            buttonsStyling: false,
                            confirmButtonClass: "btn btn-info"
                        });
                    } else {
                        var type = "success";

                        if($(".selectpicker").val() == 'publish'){
                            var text = "You really want to publish selected images?";
                        } else if($(".selectpicker").val() == 'unpublish'){
                            var text = "You really want to unpublish selected images?";
                        } else {
                            var text = "You really want to delete selected images?";
                            var type = "warning";
                        }

                        swal({
                            title: 'Are you sure?',
                            text: text,
                            type: type,
                            showCancelButton: true,
                            confirmButtonClass: 'btn btn-success',
                            cancelButtonClass: 'btn btn-danger',
                            confirmButtonText: 'Ok!',
                            buttonsStyling: false
                        }).then(function () {
                            $('#content-list').submit();
                        });
                    }
                }

            });
        });
    </script>
@endsection