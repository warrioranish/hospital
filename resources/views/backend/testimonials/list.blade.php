@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="blue">
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <h4 class="card-title">Testimonials</h4>
                        <br>
                        <div class="card-content">
                            @if(session('status'))
                                <h5 class="alert {{ (isset($_GET['delete'])) ? 'alert-danger' : 'alert-success' }} text-center flash-message">{{ session('status') }}</h5>
                            @endif
                            <div class="row">
                                <a href="{{route('createtestimonials')}}" class="btn btn-primary pull-right">Add Testimonials</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <tr>
                                        <th width="20%">Name</th>
                                        <th width="20%">Position</th>
                                        <th width="35%">testimonials</th>
                                        <th width="10%">status</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(count($testimonials) > 0 )
                                        @foreach($testimonials as $t)
                                            <tr>
                                                <td>{{$t->name}}</td>
                                                <td>{{$t->position}}</td>
                                                <td>{{$t->testimonial}}</td>
                                                <td>{{($t->status == 1) ? "active" : "inactive"}}</td>
                                                <td class="td-actions">
                                                    <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('admin/testimonials/edit/' . $t->id) }}" title="edit testimonial">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a type="button" rel="tooltip" class="btn btn-danger btn-round delete-testimonial" href="{{route('deletetestimonials', ['id'=> $t->id])}}" title="delete testimonial">
                                                        <i class="material-icons">close</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                <h4>There are no testimonials added yet, click <a href="{{route('createtestimonials')}}">here</a> to add one</h4>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if(isset($testimonials))
                            {{ $testimonials->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){

            $('.flash-message').slideUp('slow');

            $('.delete-testimonial').click(function() {
                var sure = confirm('Do you really want to remove this testimonial!');
                if(!sure)
                    return false;
            });
        })
    </script>

@endsection

