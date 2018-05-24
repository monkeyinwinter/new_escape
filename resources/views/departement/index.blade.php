@extends('layouts.base')
@section('contenu')

    <p>departement liste</p>
    <a href='{{ URL::route('departement.create') }}'>créer un nouveau departement</a>

    @forelse ($departements as $departement)
        <div class="row">
            <div class="row_col">
                <h4>
                    {{ $departement->name }}
                </h4>
            </div>
            <div class="row_col">
                <p>
                    <a href='{{URL::route('departement.edit', ['departement'=>$departement->id])}}'>modifier</a>
                </p>
            </div>
            <div class="row_col">
                <form action="{{route('departement.destroy', ['departement'=>$departement->id])}}" method="GET">
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    @empty
        <p>Aucun departement</p>
    @endforelse


@endsection
