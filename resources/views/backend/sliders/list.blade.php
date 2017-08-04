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
                        <h4 class="card-title">Sliders</h4>
                        <br>
                        <div class="card-content">
                            @if(session('status'))
                                <div class="alert {{ (isset($_GET['delete'])) ? 'alert-danger' : 'alert-success' }} alert-with-icon text-center flash-message" data-notify="container">
                                    <i class="material-icons" data-notify="icon">notifications</i>
                                    <button type="button" aria-hidden="true" class="close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span data-notify="message">{{session('status')}}.</span>
                                </div>
                            @endif
                            <div class="row">
                                <a href="{{route('createsliders')}}" class="btn btn-primary pull-right">Add Sliders</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <tr>
                                        <th width="15%">Name</th>
                                        <th width="20%">Thumbnail</th>
                                        <th width="20%">Caption1</th>
                                        <th width="20%">Caption2</th>
                                        <th width="10%">status</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(count($sliders) > 0 )
                                        @foreach($sliders as $s)
                                            <tr>
                                                <td>{{$s->name}}</td>
                                                <td><img class="thumbnail" src="{{ asset('uploads/images/sliders/'.$s->image) }}" alt=""></td>
                                                <td>{{$s->caption1}}</td>
                                                <td>{{$s->caption2}}</td>
                                                <td>{{($s->status == 1) ? "active" : "inactive"}}</td>
                                                <td class="td-actions">
                                                    <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('admin/sliders/edit/'.$s->id) }}" title="edit slider">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <form id="delete_form" action="{{ url('admin/sliders/delete/'.$s->id) }}" method="POST" style="display:inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" rel="tooltip" class="btn btn-danger btn-round delete-slider" title="delete slider"><i class="material-icons">delete</i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                <h4>There are no sliders added yet, click <a href="{{route('createsliders')}}">here</a> to add one</h4>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if(isset($sliders))
                            {{ $sliders->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {

            $('.flash-message').slideUp('slow');

            $('.delete-slider').click(function(e) {
                e.preventDefault();
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

                    $('#delete_form').submit();
                });
            });
        })
    </script>
@endsection