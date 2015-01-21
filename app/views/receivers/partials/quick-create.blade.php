{{ Form::open(['class' => 'form-inline']) }}

    <!--- Name Field --->
    <div class="form-group">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus']) }}
    </div>

    <!--- Create Field --->
    <div class="form-group">
        {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
    </div>

{{ Form::close() }}
