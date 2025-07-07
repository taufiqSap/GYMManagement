<!-- resources/views/customers/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Data Customer</title>
</head>
<body>

    <h1>Data Customer</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nama Customer</th>
                <th>Email Customer</th>
                <th>No Customer</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
