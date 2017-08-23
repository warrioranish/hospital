@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form name="content-list" id="content-list"action="{{ route('actiongallery') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header card-header-icon" data-background-color="green">
                                <i class="material-icons">insert_photo</i>
                            </div>
                            <h4 class="card-title">Gallery</h4>
                            <br>
                            <div class="card-content">
                                @if(session('status'))
                                    <div class="alert {{ (isset($_GET['delete'])) ? 'alert-danger' : 'alert-success' }} alert-with-icon text-center flash-message" data-notify="container">
                                        <i class="material-icons" data-notify="icon">notifications</i>
                                        <span data-notify="message">{{session('status')}}.</span>
                                    </div>
                                @endif
                                <div class="container-fluid">
                                    <a href="{{route('creategallery')}}" class="btn btn-primary pull-right">Add Gallery</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                        <tr>
                                            <th width="10%">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" id="checkall">
                                                    </label>
                                                </div>
                                            </th>
                                            <th width="20%">Name</th>
                                            <th width="20%">No. of Images</th>
                                            <th width="25%">status</th>
                                            <th width="25%">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @if(count($gallery) > 0 )
                                            @foreach($gallery as $g)
                                                <tr height="100px">
                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="check[]" value="{{ $g->id }}" class="flag-check">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>{{$g->name}}</td>
                                                    <td>{{ ImagesNum($g->id) }}</td>
                                                    <td>{{($g->status == 1) ? "active" : "inactive"}}</td>
                                                    <td class="td-actions">
                                                        <a type="button" rel="tooltip" class="btn btn-info btn-round" href="{{ url('admin/gallery/images/'.$g->id) }}" title="{{ $g->name }} images">
                                                            <i class="material-icons">call_made</i>
                                                        </a>

                                                        <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('admin/gallery/edit/'.$g->id) }}" title="edit gallery">
                                                            <i class="material-icons">edit</i>
                                                        </a>

                                                        <button type="button" rel="tooltip" class="btn btn-danger btn-round delete-gallery" title="delete gallery" data-href="{{ url('admin/gallery/delete/'.$g->id) }}"><i class="material-icons">delete</i></button>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    <h4>There are no gallery added yet, click <a href="{{route('creategallery')}}">here</a> to add one</h4>
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @if(count($gallery) > 0 )
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
                    @if(isset($gallery))
                        <div class="col-sm-12 text-center">
                            {{ $gallery->links() }}
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

            $('.delete-gallery').click(function() {
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
                            var text = "You really want to publish selected gallery?";
                        } else if($(".selectpicker").val() == 'unpublish'){
                            var text = "You really want to unpublish selected gallery?";
                        } else {
                            var text = "You really want to delete selected gallery?";
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