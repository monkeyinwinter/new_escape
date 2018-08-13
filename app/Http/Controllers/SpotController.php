<?php

namespace App\Http\Controllers;

use App\Exposition;
use App\Spot;
use App\Ville;
use App\Departement;
use App\Region;
use App\Post;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Region $region, Departement $departement, Ville $ville)
    {
      $spots = Spot::where('ville_id',$ville->id)->paginate(100);
      return view('spot.index', ['spots'=>$spots, 'ville' => $ville, 'departement' => $departement, 'region' => $region]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Region $region, Departement $departement, Ville $ville)
    {
        return view('spot.create', ['departement'=> $departement,'region' => $region, 'ville'=>$ville]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Region $region, Departement $departement, Ville $ville)
    {
      $validatedData = $request->validate([
          'name' => 'required|max:255',
          'slug' => 'required|max:255',
          'nombre_voies' => 'required|max:255',
          'nombre_degaines' => 'required|max:255',
          'expo_soleil' => 'required|max:255',
          'temps_approche' => 'required|max:255',
          'type_roche' => 'required|max:255',
          'altitude' => 'required|max:255',
          'expo_soleil' => 'required|max:255',
          'temps_approche' => 'required|max:255',
          'type_roche' => 'required|max:255',
          'altitude' => 'required|max:255',
          'longueur_corde' => 'required|max:255',
          'nombre_secteur' => 'required|max:255',
          'voies_4' => 'required|max:255',
          'voies_5' => 'required|max:255',
          'voies_6' => 'required|max:255',
          'voies_7' => 'required|max:255',
          'voies_8' => 'required|max:255',
       ]);
      $spot = new Spot($validatedData);
      $spot->ville_id = $ville->id;
      $spot->save();
      return redirect()->route('spot.index', ['region'=>$region->id, 'departement'=>$departement->id, 'ville'=>$ville->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spot  $spot
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region, Departement $departement, Ville $ville, Spot $spot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spot  $spot
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region, Departement $departement, Ville $ville, Spot $spot)
    {
        return view('spot.edit', ['region'=>$region,'departement' => $departement,'ville'=>$ville, 'spot'=>$spot]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spot  $spot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region, Departement $departement, Ville $ville, Spot $spot)
    {
      $request->validate([
        'name' => 'required|max:255',
        'slug' => 'required|max:255',
        'nombre_voies' => 'required|max:255',
        'nombre_degaines' => 'required|max:255',
        'expo_soleil' => 'required|max:255',
        'temps_approche' => 'required|max:255',
        'type_roche' => 'required|max:255',
        'altitude' => 'required|max:255',
        'expo_soleil' => 'required|max:255',
        'temps_approche' => 'required|max:255',
        'type_roche' => 'required|max:255',
        'altitude' => 'required|max:255',
        'longueur_corde' => 'required|max:255',
        'nombre_secteur' => 'required|max:255',
        'voies_4' => 'required|max:255',
        'voies_5' => 'required|max:255',
        'voies_6' => 'required|max:255',
        'voies_7' => 'required|max:255',
        'voies_8' => 'required|max:255',
      ]);
      $spot->update($request->all());
      return redirect()->route('spot.index', ['spot'=>$spot->id, 'ville'=>$ville->id,'region'=>$region->id, 'departement'=>$departement->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spot  $spot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region, Departement $departement, Ville $ville, Spot $spot)
    {
      $spot->delete();
      return redirect()->route('spot.index', ['region'=>$region->id, 'departement'=>$departement->id, 'ville'=>$ville->id]);
    }
}
