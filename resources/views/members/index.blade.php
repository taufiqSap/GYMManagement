

<table border="1">
    <thead>
        <tr>
            <th>Nama Customer</th>
            <th>Nama Trainer</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Akhir</th>
            <th>Tipe Membership</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
            <tr>
                <td>{{ $member->customer_id }}</td>
                <td>{{ $member->trainer_id }}</td>
                <td>{{ $member->start_date }}</td>
                <td>{{ $member->end_date }}</td>
                <td>{{ $member->membership_type }} </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- pagination -->
{{ $members->links() }}
