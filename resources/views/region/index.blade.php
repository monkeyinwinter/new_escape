@extends('layouts.base')
@section('contenu')

    <p>region liste</p>
    <a href='{{ URL::route('region.create') }}'>créer une nouvelle région</a>

    @forelse ($regions as $region)
        <div class="row">
          <div class="row_col">
            <h4>
              {{ $region->name }}
            </h4>
          </div>
          <div class="row_col">
            <p>
              <a href='{{URL::route('region.edit', ['region'=>$region->id])}}'>modifier</a>
            </p>
          </div>
            <div class="row_col">
                <form action="{{route('region.destroy', ['region'=>$region->id])}}" method="GET">
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    @empty
        <p>Aucune region</p>
    @endforelse


@endsection
