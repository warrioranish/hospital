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
                                <h5 class="alert {{ (isset($_GET['delete'])) ? 'alert-danger' : 'alert-success' }} text-center flash-message">{{session('status')}}</h5>
                            @endif
                            <div class="row">
                                <a href="{{route('creategallery')}}" class="btn btn-primary pull-right">Add Gallery</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <tr>
                                        <th width="33%">Name</th>
                                        <th width="33%">status</th>
                                        <th width="33%">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(count($gallery) > 0 )
                                        @foreach($gallery as $g)
                                            <tr>
                                                <td>{{$g->name}}</td>
                                                <td>{{($g->status == 1) ? "active" : "inactive"}}</td>
                                                <td class="td-actions">
                                                    <a type="button" rel="tooltip" class="btn btn-info btn-round" href="" title="images list">
                                                        <i class="material-icons">call_made</i>
                                                    </a>
                                                    <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('admin/gallery/edit/'.$g->id) }}" title="edit gallery">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a type="button" rel="tooltip" class="btn btn-danger btn-round delete-sliders" href="" title="delete gallery">
                                                        <i class="material-icons">close</i>
                                                    </a>
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
                        @if(isset($gallery))
                            {{ $gallery->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {

            $('.flash-message').slideUp('slow');

            $('.delete-sliders').click(function () {
                var sure = confirm('Do you really want to delete this slider!');
                if(!sure)
                    return false;
            });
        })
    </script>
@endsection