<?php

namespace App\Http\Controllers;

use App\Voie;
use App\Spot;
use App\Ville;
use App\Departement;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;
/*use Image;*/

class VoieController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Region $region, Departement $departement, Ville $ville, Spot $spot)
    {
      $voies = Voie::where('spot_id',$spot->id)->paginate(100);
      return view('voie.index', ['voies'=>$voies, 'spot'=>$spot, 'ville' => $ville, 'departement' => $departement, 'region' => $region]);
    }


    public function saveImageVoie(Request $request, Region $region, Departement $departement, Ville $ville, Spot $spot, Voie $voie)
    {
        return view('voie.showOneVoie', ['region'=>$region,'departement' => $departement,'ville'=>$ville, 'spot'=>$spot, 'voie'=>$voie]);
    }


    public function showOneVoie(Region $region, Departement $departement, Ville $ville, Spot $spot, Voie $voie)
    {
        return view('voie.showOneVoie', ['region'=>$region,'departement' => $departement,'ville'=>$ville, 'spot'=>$spot, 'voie'=>$voie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Region $region, Departement $departement, Ville $ville, Spot $spot)
    {
      return view('voie.create', ['departement'=> $departement,'region' => $region, 'ville'=>$ville, 'spot'=>$spot]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Region $region, Departement $departement, Ville $ville, Spot $spot)
    {
      $validatedData = $request->validate([
          'name' => 'required|max:255',
          'slug' => 'required|max:255',
          'quotation_voies' => 'required|max:255',
          'descriptif' => 'required|max:255',
          'longueur_corde_conseillees' => 'required|max:255',
          'nbre_degaines_conseillees' => 'required|max:255',
          'quotation_plaisir' => 'required|max:255',

       ]);
      $voie = new Voie($validatedData);
      $voie->spot_id = $spot->id;
      $voie->save();
      return redirect()->route('voie.index', ['region'=>$region->id, 'departement'=>$departement->id, 'ville'=>$ville->id, 'spot'=>$spot->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voie  $voie
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region, Departement $departement, Ville $ville, Spot $spot, Voie $voie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voie  $voie
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region, Departement $departement, Ville $ville, Spot $spot, Voie $voie)
    {
        return view('voie.edit', ['region'=>$region,'departement' => $departement,'ville'=>$ville, 'spot'=>$spot, 'voie'=>$voie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voie  $voie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region, Departement $departement, Ville $ville, Spot $spot, Voie $voie)
    {
      $request->validate([
        'name' => 'required|max:255',
        'slug' => 'required|max:255',
        'quotation_voies' => 'required|max:255',
        'descriptif' => 'required|max:255',
        'longueur_corde_conseillees' => 'required|max:255',
        'nbre_degaines_conseillees' => 'required|max:255',
        'quotation_plaisir' => 'required|max:255',
      ]);
      $voie->update($request->all());
      return redirect()->route('voie.index', ['voie'=>$voie->id,'spot'=>$spot->id, 'ville'=>$ville->id,'region'=>$region->id, 'departement'=>$departement->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voie  $voie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region, Departement $departement, Ville $ville, Spot $spot, Voie $voie)
    {
      $voie->delete();
      return redirect()->route('voie.index', ['region'=>$region->id, 'departement'=>$departement->id, 'ville'=>$ville->id, 'spot'=>$spot->id]);
    }




}
