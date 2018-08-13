@extends('layouts.base')
@section('contenu')

    <p>departement create</p>

    <form action="{{ route('departement.store',['region'=>$region->id])}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="departement">
        <input type="text" name="slug" placeholder="slug">
        <input type="text" name="departement_number" placeholder="numero departement">

        <input type="submit" value="enregistrer">

    </form>
@endsection
