<?php

namespace App\Http\Controllers;

use App\Ville;
use App\Departement;
use App\Region;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Region $region, Departement $departement, User $user)
    {
        $user = Auth::user();
        $villes = Ville::where('departement_id',$departement->id)->paginate(100);
        return view('ville.index', ['villes' => $villes, 'departement' => $departement, 'region' => $region, 'user' => $user]);
    }


    public function json(Departement $departement)
    {
        return Ville::where('departement_id',$departement->id)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Region $region, Departement $departement, User $user)
    {
        $user = Auth::user();
        return view('ville.create', ['departement'=> $departement,'region' => $region, 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Region $region, Departement $departement, User $user)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'region_departementale' => 'required|max:255',
            'departement_number' => 'required|max:255',
         ]);
        $ville = new Ville($validatedData);
        $ville->departement_id = $departement->id;
        $ville->user_id = $user->id;
        $ville->save();
        return redirect()->route('ville.index', ['region'=>$region->id, 'departement'=>$departement->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region, Departement $departement, Ville $ville)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region, Departement $departement, Ville $ville)
    {
        $this->authorize('update', $ville);
        return view('ville.edit', ['region'=>$region,'departement' => $departement,'ville'=>$ville]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region, Departement $departement, Ville $ville)
    {
      $request->validate([
        'name' => 'required|max:255',
        'slug' => 'required|max:255',
        'region_departementale' => 'required|max:255',
        'departement_number' => 'required|max:255',
      ]);
      $ville->update($request->all());
      return redirect()->route('ville.index', ['ville'=>$ville->id,'region'=>$region->id, 'departement'=>$departement->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region, Departement $departement, Ville $ville)
    {
        $this->authorize('delete', $ville);
        $ville->delete();
        return redirect()->route('ville.index', ['region'=>$region->id, 'departement'=>$departement->id]);
    }
}
