@extends('layouts.base')
@section('contenu')

    <a href='{{ URL::route('home') }}'>Home</a>

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