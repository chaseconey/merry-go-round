
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Count</th>
        </tr>
    </thead>
    <tbody>
        @foreach($distribution as $receiver)
            <tr>
                <td>{{{ $receiver->receiver->name }}}</td>
                <td>{{{ $receiver->call_count }}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
