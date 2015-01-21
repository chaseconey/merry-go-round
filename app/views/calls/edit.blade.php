
@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-6">
            {{ Form::open(['method' => 'PUT', 'route' => ['calls.update', $call->id]]) }}

                <!--- Name Field --->
                <div class="form-group">
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', $call->name, ['class' => 'form-control', 'required' => 'required']) }}
                </div>

                    {{ Form::hidden('receiver_id', $call->receiver_id) }}
                    {{ Form::hidden('user_id', $call->user_id) }}

                    <!--- Phone Field --->
                <div class="form-group">
                    {{ Form::label('phone', 'Phone:') }}
                    {{ Form::text('phone', $call->phone, ['class' => 'form-control', 'required' => 'required']) }}
                </div>

                <!--- Notes Field --->
                <div class="form-group">
                    {{ Form::label('notes', 'Notes:') }}
                    {{ Form::textarea('notes', $call->notes, ['class' => 'form-control']) }}
                </div>

                <!--- Update Field --->
                <div class="form-group">
                    {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
                </div>

            {{ Form::close() }}
        </div>
    </div>

@stop
