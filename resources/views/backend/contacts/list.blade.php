@extends('backend.layouts.master')

@section('content')
    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon" data-background-color="rose">
                                <i class="material-icons">contacts</i>
                            </div>
                            <h4 class="card-title">Contacts</h4>
                            <br>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone-no</th>
                                            <th>Message</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($contacts) > 0)
                                            @foreach($contacts as $contact)
                                                <tr>
                                                    <td>{{$contact->name}}</td>
                                                    <td>{{$contact->email}}</td>
                                                    <td>{{$contact->phone_num}}</td>
                                                    <td>{{str_limit($contact->message, 20)}}</td>
                                                    <td class="td-actions">
                                                        <button type="button" rel="tooltip" class="btn btn-info btn-round" data-toggle="modal" data-target="#noticeModal_{{ $contact->id }}" title="show details">
                                                            <i class="material-icons">person</i>
                                                        </button>
                                                    </td>
                                                    {{--Contact details inside modal--}}
                                                    <div class="modal fade" id="noticeModal_{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-notice">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                                    <h4 class="modal-title" id="myModalLabel"><strong>Contact Details</strong></h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="instruction">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <strong> Name</strong>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <p>{{$contact->name}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="instruction">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <strong> Email</strong>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <p>{{$contact->email}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="instruction">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <strong> Phone no.</strong>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <p>{{$contact->phone_num}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="instruction">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <strong> Subject</strong>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <p>{{$contact->subject}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="instruction">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <strong> Message</strong>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <p>{{$contact->message}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="instruction">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <strong> Submitted on</strong>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <p>{{Carbon\Carbon::parse($contact->created_at)->toFormattedDateString()}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Close!</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    <p>No contacts added yet</p>
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @if(isset($contacts))
                            <div class="col-sm-12 text-center">
                                {{ $contacts->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

@endsection
