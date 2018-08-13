
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
                <a href='{{ URL::route('user.index') }}'>
                    <p>lien vers mon profil<p>
                </a>
                <a href='{{ URL::route('region.index') }}'>
                    <p>lien vers region<p>
                </a>
                <a href='{{ URL::route('post.index') }}'>
                    <p>voir les posts<p>
                </a>
                <a href='{{ URL::route('post.create') }}'>
                    <p>créer un post<p>
                </a>
                <a href='{{ URL::route('post.mesposts') }}'>
                    <p>lien vers mes postes<p>
                </a>
            </div>
        </div>
    </div>
@endsection