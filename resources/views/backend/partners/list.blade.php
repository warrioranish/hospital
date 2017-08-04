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
                                <div class="alert {{ (isset($_GET['delete'])) ? 'alert-danger' : 'alert-success' }} alert-with-icon text-center flash-message" data-notify="container">
                                    <i class="material-icons" data-notify="icon">notifications</i>
                                    <button type="button" aria-hidden="true" class="close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span data-notify="message">{{session('status')}}.</span>
                                </div>
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
                                                <td><img class="thumbnail" src="{{ asset('uploads/images/partners/'.$p->image) }}" style="width:150px;" alt=""></td>
                                                <td>{{($p->url == 'javascript:void(0)' ? 'No url added' : $p->url)}}</td>
                                                <td>{{($p->status == 1) ? "active" : "inactive"}}</td>
                                                <td class="td-actions">
                                                    <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('admin/partners/edit/'.$p->id) }}" title="edit partner">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <form id="delete_form" action="{{ url('admin/partners/delete/'.$p->id) }}" method="POST" style="display:inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" rel="tooltip" class="btn btn-danger btn-round delete-partner" title="delete partner"><i class="material-icons">delete</i></button>
                                                    </form>
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

            $('.delete-partner').click(function(e) {
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