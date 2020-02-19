@extends('layouts.app')

@section('content')
    <div class="container">

    <h3>{{$posts->caption}}</h3>

        <div class="col-4 pb-4">
            <img src="/storage/{{$posts->image}}" class = "w-100">
        </div>

    </div>

@endsection
