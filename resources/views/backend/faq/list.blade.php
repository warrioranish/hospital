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
                                <h5 class="alert {{ (isset($_GET['delete'])) ? 'alert-danger' : 'alert-success' }} text-center flash-message">{{ session('status') }}</h5>
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
                                                    <a type="button" rel="tooltip" class="btn btn-danger btn-round delete-faq" href="{{route('deletefaqs', ['id'=> $f->id])}}" title="delete FAQ">
                                                        <i class="material-icons">close</i>
                                                    </a>
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

            $('.delete-faq').click(function() {
                var sure = confirm('Do you really want to remove this FAQ!');
                if(!sure)
                    return false;
            });
        })
    </script>

@endsection

