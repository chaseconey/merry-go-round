
@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-3 col-md-offset-4 text-center">
        <h1>Login</h1>

        {{ Form::open() }}

            <!--- Email Field --->
            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) }}
            </div>

            <!--- Password Field --->
            <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
            </div>

            <!--- Login Field --->
            <div class="form-group">
                {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
            </div>


        {{ Form::close() }}
    </div>
</div>

@stop
