{!! Form::hidden('user_id', 1) !!}
<div class="row">
    <div class="form-group">
        <div class="col-md-12">
            {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group">
        <div class="col-md-8">
            {!! Form::label('excerpt', 'Excerpt', ['class' => 'control-label']) !!}
            {!! Form::text('excerpt', null, ['class' => 'form-control', 'id' => 'excerpt']) !!}
        </div>

        @if ($mode == 'edit')
            <div class="col-md-2">
                {!! Form::label('created_at', 'Created On', ['class' => 'control-label']) !!}
                {!! Form::text('created_at', $articles->created_at->format('d/m/Y'), ['class' => 'form-control', 'id' => 'created_at', 'readonly']) !!}
            </div>
            <div class="col-md-2">
                {!! Form::label('published_at', 'Published On', ['class' => 'control-label']) !!}
                {!! Form::date('published_at', date('Y-m-d'), ['class' => 'form-control', 'id' => 'published_at']) !!}
            </div>
        @else
            <div class="col-md-4">
                    {!! Form::label('published_at', 'Published On', ['class' => 'control-label']) !!}
                    {!! Form::date('published_at', null, ['class' => 'form-control', 'id' => 'published_at']) !!}
            </div>
        @endif
    </div>
</div>
<br>
<div class="row">
    <div class="form-group">
        <div class="col-md-12">
            {!! Form::label('body', 'Title', ['class' => 'control-label']) !!}
            {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body']) !!}
        </div>
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::submit($submitButtonText, $btnClass) !!}
</div>

