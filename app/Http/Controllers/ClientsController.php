<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // $clients = Clients::all();
       if ($request->has('search')) {

        $search = $request->get('search');

        $customers = Clients::where('first_name', 'like', "%{$search}%")
            ->orWhere('last_name', 'like', "%{$search}%")
            ->orWhere('email', 'like', "%{$search}%")
            ->orWhere('phone', 'like', "%{$search}%")
            ->orWhere('address', 'like', "%{$search}%")
            ->paginate(10);

        $customers->appends(['search' => $search]);
        return view('clients.grid', compact('clients', 'search'));
            } else {

         $clients = Clients::paginate(12);

        return view('clients.grid', compact('clients'));
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    return view('clients.form');
}



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $client= Clients::create($request->all());

        if($client) {
            return redirect()->route('clients.index');
        }
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
        $client = Clients::findOrFail($id);

        if ($client) {
            return view('clients.form', compact('client'));
        } else {
            return redirect()->back();
        }
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
        $client = Clients::where('id', $id)->update($request->except('_token', '_method'));

        if ($client) {
            return redirect()->route('clients.index')->with('alert-success', 'Alterado com sucessooooo');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $client = Clients::where('id', $id)->delete();

    if ($client) {
        return redirect()->route('clients.index');
    }
}
}
