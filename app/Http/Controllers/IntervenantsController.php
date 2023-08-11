<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIntervenantsRequest;
use App\Http\Requests\UpdateIntervenantsRequest;
use App\Models\Intervenants;

class IntervenantsController extends Controller
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
     * @param  \App\Http\Requests\StoreIntervenantsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIntervenantsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Intervenants  $intervenants
     * @return \Illuminate\Http\Response
     */
    public function show(Intervenants $intervenants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Intervenants  $intervenants
     * @return \Illuminate\Http\Response
     */
    public function edit(Intervenants $intervenants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIntervenantsRequest  $request
     * @param  \App\Models\Intervenants  $intervenants
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIntervenantsRequest $request, Intervenants $intervenants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Intervenants  $intervenants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intervenants $intervenants)
    {
        //
    }
}
