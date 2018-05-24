@extends('layouts.base')
@section('contenu')

    <p>region liste</p>
    <a href='{{ URL::route('region.create') }}'>créer une nouvelle région</a>

    @forelse ($regions as $region)
        <div class="row_region">
          <div class="row_region_col_1">
            <h4>
              {{ $region->name }}
            </h4>
          </div>
          <div class="row_region_col_2">
            <p>
              <a href='{{URL::route('region.edit', ['region'=>$region->id])}}'>modifier</a>
            </p>
          </div>
            <div class="row_region_col_3">
                <p>
                    <a href='{{URL::route('region.deleteShow', ['region'=>$region->id])}}'>supprimer</a>
                </p>
            </div>
        </div>
    @empty
        <p>Aucune region</p>
    @endforelse


@endsection
