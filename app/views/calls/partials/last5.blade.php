
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Receiver</th>
            <th>Creator</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($calls as $call)
            <tr>
                <td>{{ HTML::linkRoute('calls.show', $call->name, [$call->id]) }}</td>
                <td>{{{ $call->phone }}}</td>
                <td>{{ $call->receiver->name }}</td>
                <td>{{ $call->creator->name }}</td>
                <td>{{{ $call->created_at->diffForHumans() }}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
