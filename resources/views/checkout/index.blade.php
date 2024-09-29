<h1>Guest Check-out Records</h1>

<table>
    <thead>
        <tr>
            <th>Guest Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Check-out Date</th>
            <th>Check-out Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach($guests as $guest)
            <tr>
                <td>{{ $guest->name }}</td>
                <td>{{ $guest->email }}</td>
                <td>{{ $guest->phone_number }}</td>
                <td>{{ $guest->address }}</td>
                <td>{{ $guest->checkout->checkout_date }}</td>
                <td>{{ $guest->checkout->checkout_time }}</td>
            </tr>
        @endforeach
    </tbody>
</table>