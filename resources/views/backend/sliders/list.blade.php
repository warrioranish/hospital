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
                                <h5 class="alert {{ (isset($_GET['delete'])) ? 'alert-danger' : 'alert-success' }} text-center flash-message">{{session('status')}}</h5>
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
                                                <td><img src="{{ asset('uploads/images/sliders/'.$s->image) }}" alt=""></td>
                                                <td>{{$s->caption1}}</td>
                                                <td>{{$s->caption2}}</td>
                                                <td>{{($s->status == 1) ? "active" : "inactive"}}</td>
                                                <td class="td-actions">
                                                    <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('admin/sliders/edit/'.$s->id) }}" title="edit slider">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a type="button" rel="tooltip" class="btn btn-danger btn-round delete-sliders" href="{{ url('admin/sliders/delete/'.$s->id) }}" title="delete slider">
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

            $('.delete-sliders').click(function () {
                var sure = confirm('Do you really want to delete this slider!');
                if(!sure)
                    return false;
            });
        })
    </script>
@endsection