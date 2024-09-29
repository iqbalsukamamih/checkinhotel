<h1>Guest Check-in Records</h1>

<table>
    <thead>
        <tr>
            <th>Guest Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Check-in Date</th>
            <th>Check-in Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach($guests as $guest)
            <tr>
                <td>{{ $guest->name }}</td>
                <td>{{ $guest->email }}</td>
                <td>{{ $guest->phone_number }}</td>
                <td>{{ $guest->address }}</td>
                <td>{{ $guest->checkin->checkin_date }}</td>
                <td>{{ $guest->checkin->checkin_time }}</td>
            </tr>
        @endforeach
    </tbody>
</table>