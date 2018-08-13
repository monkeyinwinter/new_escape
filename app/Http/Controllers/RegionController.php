<?php

namespace App\Http\Controllers;

use App\Region;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{

    public function list () {

        $regions = DB::select("SELECT * FROM regions" );

        return view('region.list', ['regions'=>$regions]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::paginate(15);
        return view('region.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('region.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
        ]);

        Region::create($request->all());
        return redirect()->route('region.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Region $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Region $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        $this->authorize('update', $region);
        return view('region.edit', ['region'=>$region]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Region $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
        ]);
        $region->update($request->all());
        //$regions = Region::paginate(25);
        return redirect()->route('region.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Region $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        $this->authorize('delete', $region);
        $region->delete();
        return redirect()->route('region.index');
    }
}
