<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResponsablesRequest;
use App\Http\Requests\UpdateResponsablesRequest;
use App\Models\Responsables;

class ResponsablesController extends Controller
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
     * @param  \App\Http\Requests\StoreResponsablesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResponsablesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsables  $responsables
     * @return \Illuminate\Http\Response
     */
    public function show(Responsables $responsables)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responsables  $responsables
     * @return \Illuminate\Http\Response
     */
    public function edit(Responsables $responsables)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResponsablesRequest  $request
     * @param  \App\Models\Responsables  $responsables
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResponsablesRequest $request, Responsables $responsables)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Responsables  $responsables
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responsables $responsables)
    {
        //
    }
}
