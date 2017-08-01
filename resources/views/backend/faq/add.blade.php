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
                        <h4 class="card-title"><a href="{{ route('faq') }}">Faq</a> / add</h4>
                        <br>
                        <div class="card-content">
                            <div class="container-fluid">
                                <form id="add_form" class="form-horizontal" method="POST" action="{{ route('storefaqs') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Question<span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group label-floating is-empty">
                                                <textarea name="question" class="form-control" id="" cols="30" rows="3" placeholder="Question goes here ?" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Answer<span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <textarea name="answer" id="faqanswer"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1 label-on-left">Status <span class="asterisk">*</span></label>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status" value="1" checked="true"> active &nbsp;
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status" value="0"> inactive
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-1"></label>
                                        <div class="col-md-11">
                                            <div class="form-group form-button">
                                                <button type="submit" id="submit_btn" class="btn btn-fill btn-rose">Submit</button>
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
        CKEDITOR.replace('answer');

        $('#submit_btn').click(function(){
           CKEDITOR.instances.faqanswer.updateElement();
        });

        $('#add_form').validate({
//            ignore: "input:hidden:not(input:hidden.required)",
            ignore: [],
            rules: {
                question: {
                    required: true
                },
                answer: {
                    required: true
                }
            },
            messages: {
                question: {
                    required:'question field is required'
                },
                answer: {
                    required: 'Answer field is required',
                }
            }
        });

    </script>

@endsection
