
@extends('layouts.master')

@section('content')

    <div class="row">
    <div class="col-md-12">

        {{ $calls->links() }}
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Notes</th>
                    <th>Receiver</th>
                    <th>Creator</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($calls as $call)
                    <tr>
                        <td>{{ $call->id }}</td>
                        <td>{{ HTML::linkRoute('calls.show', $call->name, [$call->id]) }}</td>
                        <td>{{{ $call->phone }}}</td>
                        <td>{{{ Str::limit($call->notes) }}}</td>
                        <td>{{{ isset($call->receiver->name) ? $call->receiver->name : 'N/A' }}}</td>
                        <td>{{ isset($call->user->name) ? $call->user->name : 'N/A' }}</td>
                        <td>{{ $call->created_at->diffForHumans() }}</td>
                        <td>{{ $call->updated_at->diffForHumans() }}</td>
                        <td><a class="btn btn-success btn-sm" href="{{ URL::route('calls.edit', [$call->id]) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $calls->links() }}

    </div>
</div>

@stop
