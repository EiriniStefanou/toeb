<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChargeType;
use App\Models\LandType;
use Illuminate\Http\Request;

class LandTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landtypes = LandType::all();

        return view('admins.landtypes.index', compact('landtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chargetypes = ChargeType::all();

        return view('admins.landtypes.create', compact('chargetypes'));
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
            'charge_type_id' => 'required|exists:charge_types,id',
            'name' => 'required|min:5',
            'notes' => 'required|min:10',
            'status' => 'required'
        ]);

        $landtype = LandType::create($attributes);

        return response()->json($landtype, 201);
    }
}
