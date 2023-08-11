<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;
use App\Models\Projet;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projet = Projet::all();
        return view('projet.index')->with([
            'projet' => $projet
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projet.create1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjetRequest $request)
    {
        $this->validate($request, [
            'aon' => 'required|unique:projet , id_cadre',
            'intitule' => 'required',
            'date' => 'required',
            'mt_acquisition' => 'required',
            'mt_maintenance' => 'required',
            'duree_proj' => 'required',
            'consistance' => 'required',
            'duree_garantie' => 'required',
            'date_prov' => 'required',
            'date_def' => 'required',
            'garantie' => 'required',
            'frequence_visite' => 'nullable',
            'pv_prov' => 'required',
            'pv_def' => 'required',
            'type' => 'required',
            'duree_maintenance' => 'nullable',
            'type_maintenance'=> 'nullable',
            'nb_jour_assis' => 'nullable',
            
        
    ]);
    Projet::create($request ->except('_token'));
    return redirect()->route('projet.index')->with(['success => Projet ajouté']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjetRequest  $request
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjetRequest $request, Projet $projet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        //
    }
}
