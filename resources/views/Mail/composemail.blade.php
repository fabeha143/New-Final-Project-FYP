@extends('layouts.master')
@section('content')

<section class="content email-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                {{ Form::open(array('route' => 'inbox.store' , 'method' => 'POST' , 'class' => 'body')) }}
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-line">
                                {!! Form::text('from', Auth::user()->email , array('class' => 'form-control')) !!}
                                
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                {!! Form::text('to', null , array('class' => 'form-control' , 'placeholder' => 'TO')) !!}
                                
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                {!! Form::text('subject', null ,array('class' => 'form-control' , 'placeholder' => 'Subject')) !!}
                                </div>
                            </div>
                            <div class="form-group form-float">
                            <div class="form-line">
                                {!! Form::textarea('message', null ,array('class' => 'form-control' , 'placeholder' => 'Message')) !!}
                                
                                </div>
                            </div>
                               
                        </div>               
                                              
                        <div class="col-lg-12">
                        {{ Form::submit('Send',array('class' => 'btn btn-large btn-primary openbutton' , 'style' => 'width:500px;'))}}
                        </div>

                    </div>                    
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
@endsection()