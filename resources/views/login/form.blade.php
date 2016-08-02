<div class="well well-lg">
    <div class="row">
        <div class="form-group">
            <div class="col-md-12">
                {!! Form::label('email', 'E-mail Address', ['class' => 'control-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder'=>'Enter with your e-mail address']) !!}
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group">
            <div class="col-md-12">
                {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder'=>'Enter with your password']) !!}
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group">
            <div class="col-md-12">
                {!! Form::submit($submitButtonText, $btnClass) !!}
                {!! Form::submit($submitButtonTextRegister, $btnClassRegister) !!}
            </div>
        </div>
    </div>
    <br>
    {!! Form::checkbox($checkName),' ', $checkText !!}
</div>
