<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();

        $payments->load('client');

        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();

        return view('payments.create', compact('clients'));
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
            'amount' => 'required|min:1',
            'type' => 'required|min:5',
            'receipt_num' => 'required|min:3',
        ]);

        $client = Client::find($attributes['client_id']);

        $payment = $client->payments()->create($attributes);

        return response()->json($payment->load('client'), 201);
    }
}
