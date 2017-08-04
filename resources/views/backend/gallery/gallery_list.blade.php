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
                        <h4 class="card-title">Gallery</h4>
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
                            {{--@if(session('status'))--}}
                                {{--<h5 class="alert {{ (isset($_GET['delete'])) ? 'alert-danger' : 'alert-success' }} text-center flash-message">{{session('status')}}</h5>--}}
                            {{--@endif--}}
                            <div class="row">
                                <a href="{{route('creategallery')}}" class="btn btn-primary pull-right">Add Gallery</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <tr>
                                        <th width="25%%">Name</th>
                                        <th width="25%%">No. of Images</th>
                                        <th width="25%%">status</th>
                                        <th width="25%">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(count($gallery) > 0 )
                                        @foreach($gallery as $g)
                                            <tr>
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

                                                    <form id="delete_form" action="{{ url('admin/gallery/delete/'.$g->id) }}" method="POST" style="display:inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" rel="tooltip" class="btn btn-danger btn-round delete-gallery" title="delete gallery"><i class="material-icons">delete</i></button>
                                                    </form>


                                                    {{--<a type="button" rel="tooltip"  href="javascript:void(0)" data-href="{{ url('admin/gallery/delete/'.$g->id) }}" >--}}
                                                        {{--<i class="material-icons">delete</i>--}}
                                                    {{--</a>--}}
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
                        @if(isset($gallery))
                            {{ $gallery->links() }}
                        @endif
                    </div>
                </div>
        </div>
    </div>

    <script>
        $(function () {

            $('.flash-message').slideUp(1000, 'swing');

            $('.delete-gallery').click(function(e) {
                e.preventDefault();
//                var link = $(this);
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
                            console.log('hello');
                            $('#delete_form').submit();
//                            var href = link.attr('data-href');
//                            window.location= href;
                    });
            });
        })
    </script>

@endsection