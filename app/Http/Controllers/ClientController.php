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
        $clients = Client::all();

        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $this->validate($request, [
            'name' => 'required|min:5',
            'surname' => 'required|min:5',
            'afm' => 'required|min:5|unique:clients',
            'doy' => 'required|min:5',
            'address' => 'required|min:5',
            'phone' => 'required|max:10',
            'at' => 'required|min:5',
            'protocol_num' => 'required|min:5'
        ]);

        $client = Client::create($attributes);

        return response()->json($client, 201);
    }
}
