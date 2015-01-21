
@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Last 5 Calls</h3>
                </div>
                @include('calls.partials.last5', ['calls' => $calls])
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Receiver Distribution</h3>
                </div>
                @include('receivers.partials.distribution', ['distribution' => $distribution])
            </div>
        </div>
    </div>


@stop
