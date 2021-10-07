<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::all();
        return view("client.index",["clients"=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // grazina vaizda i client.create vaizda- forma sukurimui
        return view ("client.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // atsakinga uz visu duomenu patalpinuma
    public function store(Request $request)
    {
        $client=new Client;

        // po request -> visada turi buti kintamojo pavadinimas ir tada stulpelio pavadinimas
        $client->name=$request->client_name;
        $client->surname=$request->client_surname;
        $client->username=$request->client_username;
        $client->company_id=$request->client_company_id;
        $client->image_url=$request->client_image_url;

        $client->save();

        return redirect()->route("client.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        // per vaizda perduodam visa informacija apie klienta, pagal ID
        // kaip clientShow.php?ID=$clientID
        // tekstas tarp kabuciu nurodo kintamojo pavadinimas, kuriuo kreipiamasi blade dokumente
        // "client" gali buti ir kitoks zodis- bet jis turi buti toks pats ir blade dokumentuose
        // $client- yra visa informacija apie klienta
        return view ("client.show", ["client"=>$client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view("client.edit", ["client"=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        // po request -> visada turi buti kintamojo pavadinimas ir tada stulpelio pavadinimas
        $client->name=$request->client_name;
        $client->surname=$request->client_surname;
        $client->username=$request->client_username;
        $client->company_id=$request->client_company_id;
        $client->image_url=$request->client_image_url;

        $client->save();

        return redirect()->route("client.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route("client.index");
    }
}
