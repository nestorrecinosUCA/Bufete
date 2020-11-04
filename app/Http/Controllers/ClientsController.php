<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderby('lastname')->get();
        return view('clients.clients_list', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'dui' => 'required|string|max:10',
            'nit' => 'required|string|max:17',
            'address' => 'required|string',
            'telephone' => 'integer',
            'cellphone' => 'integer',
            'notes' => 'required|string'
        ]);
        $newClient = Client::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'dui' => $request->dui,
            'nit' => $request->nit,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'cellphone' => $request->cellphone,
            'notes' => $request->notes,
            'status' => 'active'
        ]);

        return redirect()->route('showClients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::where('id', $id)->get();
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Client::find($id);
        $user->delete();
        return redirect()->route('showClients');
    }
}
