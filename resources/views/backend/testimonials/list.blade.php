@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form id="content-list" name="content-list" action="{{ route('actiontestimonials') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header card-header-icon" data-background-color="blue">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <h4 class="card-title">Testimonials</h4>
                            <br>
                            <div class="card-content">
                                @if(session('status'))
                                    <div class="alert {{ (isset($_GET['delete'])) ? 'alert-danger' : 'alert-success' }} alert-with-icon text-center flash-message" data-notify="container">
                                        <i class="material-icons" data-notify="icon">notifications</i>
                                        <span data-notify="message">{{session('status')}}.</span>
                                    </div>
                                @endif
                                <div class="container-fluid">
                                    <a href="{{route('createtestimonials')}}" class="btn btn-primary pull-right">Add Testimonials</a>
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
                                            <th width="20%">Name</th>
                                            <th width="15%%">Position</th>
                                            <th width="35%">testimonials</th>
                                            <th width="10%">status</th>
                                            <th width="15%">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @if(count($testimonials) > 0 )
                                            @foreach($testimonials as $t)
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="check[]" value="{{ $t->id }}" class="flag-check">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>{{$t->name}}</td>
                                                    <td>{{$t->position}}</td>
                                                    <td>{{$t->testimonial}}</td>
                                                    <td>{{($t->status == 1) ? "active" : "inactive"}}</td>
                                                    <td class="td-actions">
                                                        <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('admin/testimonials/edit/' . $t->id) }}" title="edit testimonial">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        <button type="button" rel="tooltip" class="btn btn-danger btn-round delete-testimonial" title="delete testimonial" data-href="{{route('deletetestimonials', ['id'=> $t->id])}}"><i class="material-icons">delete</i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-center">
                                                    <h4>There are no testimonials added yet, click <a href="{{route('createtestimonials')}}">here</a> to add one</h4>
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @if(count($testimonials) > 0 )
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
                    @if(isset($testimonials))
                        <div class="col-sm-12 text-center">
                            {{ $testimonials->links() }}
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
        $(function(){

            setTimeout(function() {
                $('.flash-message').slideUp(1500, 'swing');
            }, 1500);

            $('.delete-testimonial').click(function() {
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
                            var text = "You really want to publish selected testimonial?";
                        } else if($(".selectpicker").val() == 'unpublish'){
                            var text = "You really want to unpublish selected testimonial?";
                        } else {
                            var text = "You really want to delete selected testimonial?";
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
        })
    </script>

@endsection

