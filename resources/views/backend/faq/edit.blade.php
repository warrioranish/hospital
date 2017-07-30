@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="grey">
                            <i class="material-icons">question_answer</i>
                        </div>
                        <h4 class="card-title"><a href="{{ route('faq') }}">Faq</a> / edit</h4>
                        <br>
                        <div class="card-content">
                            <div class="container-fluid">
                                <form id="edit_form" class="form-horizontal" method="POST" action="{{ route('updatefaqs', ['id' => $faq->id]) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Question<span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group label-floating is-empty">
                                                <textarea name="question" class="form-control" id="" cols="30" rows="3" placeholder="Question goes here ?">{{ $faq->question }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Answer<span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <textarea name="answer" id="faqanswer">{!! $faq->answer !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Status <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status" value="1" {{ ($faq->status == 1) ? 'checked="true"' : '' }}> active &nbsp;
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status" value="0" {{ ($faq->status == 0) ? 'checked="true"' : '' }}> inactive
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1"></label>
                                        <div class="col-md-11">
                                            <div class="form-group form-button">
                                                <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var editor = CKEDITOR.replace('answer');
        editor.on('change', function(evt) { $('#faqanswer').html(this.getData().toString());});

        $('#edit_form').validate({
            ignore: "input:hidden:not(input:hidden.required)",
            rules: {
                question: {
                    required: true
                },
                answer: {
                    required: true
                }
            },
            messages:{
                question: {
                    required: 'question field is required'
                },
                answer: {
                    required: 'answer field is required'
                }
            }
        });
    </script>
@endsection
