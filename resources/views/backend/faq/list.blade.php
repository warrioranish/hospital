@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="grey">
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <h4 class="card-title">Faq</h4>
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
                                <a href="{{route('createfaqs')}}" class="btn btn-primary pull-right">Add Faq</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <tr>
                                        <th width="30%">question</th>
                                        <th width="40%">answer</th>
                                        <th width="15%">status</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(count($faq) > 0 )
                                        @foreach($faq as $f)
                                            <tr>
                                                <td>{{$f->question}}</td>
                                                <td>{{str_limit(strip_tags($f->answer), 255)}}</td>
                                                <td>{{($f->status == 1) ? "active" : "inactive"}}</td>
                                                <td class="td-actions">
                                                    <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('admin/faq/edit/' . $f->id) }}" title="edit FAQ">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <form id="delete_form" action="{{route('deletefaqs', ['id'=> $f->id])}}" method="POST" style="display:inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" rel="tooltip" class="btn btn-danger btn-round delete-faq" title="delete FAQ"><i class="material-icons">delete</i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                <h4>There are no FAQ added yet, click <a href="{{route('createfaqs')}}">here</a> to add one</h4>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if(isset($faq))
                            {{ $faq->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){

            $('.flash-message').slideUp('slow');

            $('.delete-faq').click(function(e) {
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

