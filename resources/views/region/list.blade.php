@extends('layouts.base')
@section('contenu')

    toto

    @forelse ($regions as $region)
        <a href='{{URL::route('departement.index', ['region'=>$region->id])}}'>
            <p>
                {{ $region->name }}
            </p>
        </a>
    @empty
        <p>Aucune region</p>
    @endforelse

@endsection