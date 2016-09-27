@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }} Welcome! </div>

                <div class="panel-body">
                    You are logged in!
                    <button type="button" class="w3-btn w3-round-xxlarge w3-blue" onclick="location.href='Blog'">Go to Blog</button>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
