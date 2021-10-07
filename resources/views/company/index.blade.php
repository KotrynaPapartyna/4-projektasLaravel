
<h1>Companies</h1>


<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Description</th>

    </tr>

    @foreach ($companys as $company)
        <tr>
            <td>{{ $company->id }}</td>

            <!--figuriniuose skliausiaute href- nurodomas kelias ir kintamasis-->
            <td><a href="{{route('company.show', [$company]) }}"> {{$company->name }}</a></td>
            <td>{{ $company->type}}</td>
            <td>{{ $company->description}}</td>

            <td>
                <!-- editas per nuoroda-->
                <a href="{{route('company.edit', [$company]) }}">Edit</a>

                <!-- Delete vykdomas visada per forma-->
                <form method="POST" action="{{route('company.destroy', [$company]) }}">

                    @csrf
                    <button type="submit">Delete</button>
                </form>

            </td>
        </tr>
    @endforeach

</table>
