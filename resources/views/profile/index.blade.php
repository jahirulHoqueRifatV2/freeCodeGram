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
        <div class="col-4"><img src="https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.106.921.921a/s640x640/84770545_2609265086061431_6387769783591162166_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=wzD-rtA33d0AX9PYVib&oh=80b87fce1faf065f0fc1fe7146287ff1&oe=5EC4FDED" class = "w-100" alt=""></div>
        <div class="col-4"><img src="https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/82339013_604012433755999_687788727040640519_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=Z0xswacDMToAX-Os2kv&oh=91e3b4d0029889863aabc59f11ab0fcb&oe=5EFC0CA4" class = "w-100"></div>
        <div class="col-4"><img src="https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.111.928.928a/s640x640/82967728_222124025469517_5532436576170466152_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=LwggUpUFA3AAX_YAnP7&oh=bd29ba0bc47a8a980f1a1bf25541f695&oe=5EC3C23B" class = "w-100"></div>
    </div>
    

</div>

@endsection
