<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCadresRequest;
use App\Http\Requests\UpdateCadresRequest;
use App\Models\Cadres;

class CadresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadres = Cadres::all();
        return view('cadres.index')->with([
            'cadres' => $cadres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCadresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCadresRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:cadres , id_cadre',
            'mail' => 'required',
            'service' => 'required',
        
    ]);
    Cadres::create($request ->except('_token'));
    return redirect()->route('cadres.index')->with(['success => Cadre ajouté']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cadres  $cadres
     * @return \Illuminate\Http\Response
     */
    public function show(Cadres $cadres)
    {
        return view('cadres.show')->withCadres($cadres);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cadres  $cadres
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadres=Cadres::where('id_cadre', $id);
        return view('cadres.edit', [
            'cadres' => $cadres,
        ]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCadresRequest  $request
     * @param  \App\Models\Cadres  $cadres
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCadresRequest $request, $id)
    {
        $cadre = Cadres::where('id_cadre', $id)->first();

        $this->validate($request, [
            'name' => 'required|unique:cadres, id_cadre'.$cadre->id_cadre,
            'mail' => 'required',
            'service' => 'required',
        
    ]);
    $cadre->update($request ->except('_token', '_method'));
    return redirect()->route('cadres.index', ['cadre' => $id])->with([
        'success => Cadre mis à jour']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cadres  $cadres
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadre = Cadres::where('id_cadre', $id)->first();
        $cadre->delete();

        return redirect()->route('cadres.index')->with([
            'success => Cadre supprimé']);

    }
}
