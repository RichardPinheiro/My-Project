@extends('default')

@section('content')
    <div class="penel-login">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['class' => 'form']) !!}
                        @include('login.form' , [
                            'submitButtonText'         => 'Login',
                            'btnClass'                 => ['class' => 'btn btn-primary form-control btn-block'],
                            'submitButtonTextRegister' => 'Sign Up',
                            'btnClassRegister'         => ['class' => 'btn btn-default form-control btn-block'],
                            'checkName'                => 'remenber',
                            'checkText'                => 'Remenber Me'
                        ])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop