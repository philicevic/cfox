@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel">
                <h1 class="page-title">Register a clan</h1>
                <form method="POST" action="/clans">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Clan name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subdomain" placeholder="Subdomain">
                    </div>
                    <div class="form-group">
                        <input type="text" name="website" placeholder="Homepage">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit" name="button">Create</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
@endsection
