
@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <a class="btn btn-success" href="{{ URL::route('calls.edit', [$call->id]) }}">Edit</a>
            
            <h2>{{{ $call->name }}} <small>{{{ $call->phone }}}</small></h2>

            <div class="row">

                <div class="col-md-6">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Meta</h3>
                        </div>
                        <table class="table">
                            <tr>
                                <td class="bg-warning">Receiver</td>
                                <td>{{ isset($call->receiver->name) ? $call->receiver->name : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="bg-warning">Creator</td>
                                <td>{{ isset($call->creator->name) ? $call->creator->name : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="bg-warning">Created</td>
                                <td>{{ $call->created_at->diffForHumans() }}</td>
                            </tr>
                            <tr>
                                <td class="bg-warning">Last Updated</td>
                                <td>{{ $call->updated_at->diffForHumans() }}</td>
                            </tr>
                        </table>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Notes</h3>
                        </div>
                        <div class="panel-body">
                            {{{ $call->notes }}}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>



@stop
