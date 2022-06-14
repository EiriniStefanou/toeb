<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Estate;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estates = Estate::all();

        $estates->load('client');

        return view('estates.index', compact('estates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();

        return view('estates.create', compact('clients'));
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
            'client_id' => 'required|exists:clients,id',
            'size' => 'required|min:1',
            'region' => 'required|min:5',
            'type' => 'required|min:5',
            'notes' => 'required|min:10',
        ]);

        $client = Client::find($attributes['client_id']);

        $estate = $client->estates()->create($attributes);

        return response()->json($estate->load('client'), 201);
    }
}
