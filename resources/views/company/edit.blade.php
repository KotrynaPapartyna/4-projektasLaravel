<h1>Edit/Change information about Company</h1>

<form method="POST" action="{{route('company.update', [$company])}}">
    Name: <input type="text" name="company_name" value="{{$company->name}}">
    Type: <input type="text" name="company_type" value="{{$company->type}}">
    Description: <input type="text" name="company_description" value="{{$company->description}}">

@csrf

<button type="submit">Edit</button>
</form>



