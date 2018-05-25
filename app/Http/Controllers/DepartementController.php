<?php

namespace App\Http\Controllers;

use App\Departement;
use App\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Region $region)
    {
        $departements = Departement::where('region_id',$region->id)->paginate(15);
        return view('departement.index', ['departements' => $departements, 'region' => $region]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Region $region)
    {
        return view('departement.create', ['region'=> $region]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Region $region)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'departement_number' => 'required|max:255',
        ]);
        $departement = new Departement($validatedData);
        $departement->region_id = $region->id;
        $departement->save();
        return redirect()->route('departement.index', ['region'=>$region->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departement $departement
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region, Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departement $departement
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region, Departement $departement)
    {
        return view('departement.edit', ['departement' => $departement], ['region'=>$region]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Departement $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region, Departement $departement)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'departement_number' => 'required|max:255',
        ]);
        $departement->update($request->all());
        return redirect()->route('departement.index', ['region'=>$region->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departement $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region, Departement $departement)
    {
        $departement->delete();
        return redirect()->route('departement.index', ['region'=>$region->id]);
    }
}
