
@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-3">

            {{ Form::open(['method' => 'PUT', 'route' => ['receivers.update', $receiver->id]]) }}

                <!--- Name Field --->
                <div class="form-group">
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', $receiver->name, ['class' => 'form-control', 'required' => 'required']) }}
                </div>

                <!--- Create Field --->
                <div class="form-group">
                    {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
                </div>

            {{ Form::close() }}

        </div>
    </div>

@stop

