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
                        <h4 class="card-title"><a href="{{ route('gallery') }}">Gallery</a> / {{ $gallery->name }}</h4>
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
                                <a href="{{route('createimages', ['id' => $gallery->id])}}" class="btn btn-primary pull-right">Add Images</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <tr>
                                        <th width="20%">Title</th>
                                        <th width="20%">Thumbnail</th>
                                        <th width="35%">Description</th>
                                        <th width="10%">Status</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(count($images) > 0 )
                                        @foreach($images as $i)
                                            <tr>
                                                <td>{{$i->title}}</td>
                                                <td><img class="thumbnail" src="{{ asset('uploads/images/gallery/'.$i->image) }}" alt=""></td>
                                                <td>{!! str_limit($i->description, 100) !!}</td>
                                                <td>{{($i->status == 1) ? "active" : "inactive"}}</td>
                                                <td class="td-actions">
                                                    <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('admin/gallery/images/edit/'.$i->id) }}" title="edit image">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <form action="{{ url('admin/gallery/images/delete/'.$i->id) }}" method="POST" style="display:inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" rel="tooltip" class="btn btn-danger btn-round delete-image" title="delete image"><i class="material-icons">delete</i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                <h4>There are no images added yet, click <a href="{{route('createimages', ['id' => $gallery->id])}}">here</a> to add one</h4>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if(isset($images))
                            {{ $images->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {

            $('.flash-message').slideUp(1000, 'swing');

            $('.delete-image').click(function(e) {
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