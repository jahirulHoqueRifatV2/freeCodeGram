@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-3 pd-5">
            <img src="https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_ohc=qNYP8jXEMgoAX9o9wWE&amp;oh=f9dd974fc0c778c20e9395a1d48793ba&amp;oe=5ECEBCBA" class="rounded-circle" salt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
            <a href="{{"/post/create"}}">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"> <strong>153 </strong>posts</div>
                 <div class="pr-5"> <strong>23k </strong>follower</div>
                <div class="pr-5"><strong>212 </strong>following</div>
            </div>

        <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div> 
            <div>{{$user->profile->description}}</div> 
            <div><a href="{{$user->profile->url}}">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">

        @foreach ($user->post as $post)
            <div class="col-4">
                <img src="/storage/{{$post->image}}" class = "w-100">
            </div>
        @endforeach
        
        
    </div>

</div>

@endsection
