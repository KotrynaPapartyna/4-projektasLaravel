<h2>Create New Client<h2>

<form method="POST" action="{{route('client.store')}}">
    <p>Name: <input type="text" name="client_name"></p>
    <p>Surname: <input type="text" name="client_surname"></p>
    <p>Username: <input type="text" name="client_username"></p>
    <p>Company_id: <input type="text" name="client_company_id"></p>
    <p>Image_url: <input type="text" name="client_image_url"></p>


    @csrf

    <button type="submit">Add new Client</button>
    </form>
