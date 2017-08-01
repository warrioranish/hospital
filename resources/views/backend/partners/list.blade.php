@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="purple">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <h4 class="card-title">Partners</h4>
                        <br>
                        <div class="card-content">
                            @if(session('status'))
                                <h5 class="alert {{ (isset($_GET['delete'])) ? 'alert-danger' : 'alert-success' }} text-center flash-message">{{session('status')}}</h5>
                            @endif
                            <div class="row">
                                <a href="{{route('createpartners')}}" class="btn btn-primary pull-right">Add Partners</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <tr>
                                        <th width="15%">Name</th>
                                        <th width="25%">Thumbnail</th>
                                        <th width="30%">Url</th>
                                        <th width="15%">Status</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(count($partners) > 0 )
                                        @foreach($partners as $p)
                                            <tr>
                                                <td>{{$p->name}}</td>
                                                <td><img src="{{ asset('uploads/images/partners/'.$p->image) }}" style="width:150px;" alt=""></td>
                                                <td>{{($p->url == 'javascript:void(0)' ? 'No url added' : $p->url)}}</td>
                                                <td>{{($p->status == 1) ? "active" : "inactive"}}</td>
                                                <td class="td-actions">
                                                    <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('admin/partners/edit/'.$p->id) }}" title="edit partner">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a type="button" rel="tooltip" class="btn btn-danger btn-round delete-partner" href="{{ url('admin/partners/delete/'.$p->id) }}" title="delete partner">
                                                        <i class="material-icons">close</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                <h4>There are no sliders added yet, click <a href="{{route('createpartners')}}">here</a> to add one</h4>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if(isset($partners))
                            {{ $partners->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {

            $('.flash-message').slideUp('slow');

            $('.delete-partner').click(function () {
                var sure = confirm('Do you really want to delete this partner!');
                if(!sure)
                    return false;
            });
        })
    </script>
@endsection