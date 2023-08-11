<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePVRequest;
use App\Http\Requests\UpdatePVRequest;
use App\Models\PV;

class PVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePVRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePVRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PV  $pV
     * @return \Illuminate\Http\Response
     */
    public function show(PV $pV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PV  $pV
     * @return \Illuminate\Http\Response
     */
    public function edit(PV $pV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePVRequest  $request
     * @param  \App\Models\PV  $pV
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePVRequest $request, PV $pV)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PV  $pV
     * @return \Illuminate\Http\Response
     */
    public function destroy(PV $pV)
    {
        //
    }
}
