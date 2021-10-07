<h1>Clients</h1>


<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Username</th>
        <th>Company_id</th>
        <th>Image_url</th>
    </tr>

    @foreach ($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>

            <!--figuriniuose skliausiaute href- nurodomas kelias ir kintamasis-->
            <td><a href="{{route('client.show', [$client]) }}"> {{$client->name }}</a></td>
            <td>{{ $client->surname }}</td>
            <td>{{ $client->username }}</td>
            <td>{{ $client->company_id }}</td>
            <td>{{ $client->image_url }}</td>

            <td>
                <!-- editas per nuoroda-->
                <a href="{{route('client.edit', [$client]) }}">Edit</a>

                <!-- Delete vykdomas visada per forma-->
                <form method="POST" action="{{route('client.destroy', [$client]) }}">

                    @csrf
                    <button type="submit">Delete</button>
                </form>

            </td>
        </tr>
    @endforeach

</table>
