
@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="col-md-3">
                @include('receivers.partials.quick-create')
            </div>
        </div>

        {{ $receivers->links() }}
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($receivers as $receiver)
                    <tr>
                        <td>{{ $receiver->id }}</td>
                        <td>{{{ $receiver->name }}}</td>
                        <td>{{ $receiver->created_at->diffForHumans() }}</td>
                        <td>{{ $receiver->updated_at->diffForHumans() }}</td>
                        <td><a class="btn btn-success btn-sm" href="{{ URL::route('receivers.edit', [$receiver->id]) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $receivers->links() }}

    </div>
</div>

@stop
