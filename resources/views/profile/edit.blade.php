@extends('layouts.app')

@section('content')

    <div class="container">

        <form action="/post" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">

                   <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1>Edit Post</h1>
                    </div>
                    <div class="form-group row">
                            <label for= 'title' class="col-md-4 col-form-label ">Title</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id='title' type="text" class="form-control @error('title') is-invalid @enderror" name='title' value="{{ old('title') ?? $user->profile->title }}" required autocomplete=caption autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                    </div>

                    <div class="form-group row">
                            <label for= 'Description' class="col-md-4 col-form-label ">Description</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id='Description' type="text" class="form-control @error('Description') is-invalid @enderror" name='Description' value="{{ old('Description') ?? $user->profile->description}}" required autocomplete=caption autofocus>

                                @error('Description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Description') }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                    </div>

                    <div class="form-group row">
                            <label for= 'Url' class="col-md-4 col-form-label ">URL</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id='Url' type="text" class="form-control @error('Url') is-invalid @enderror" name='Url' value="{{ old('Url') ?? $user->profile->url}}" required autocomplete=caption autofocus>

                                @error('Url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Url') }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                    </div>

                    <div class="row">


                        <label for="image" class="col-md-4 col-form-label">Image</label>

                        <input type="file" class="form-control-file" id="image" name ="image">

                        @error('image')

                                <strong>{{ $errors->first('image') }}</strong>

                        @enderror

                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Update</button>
                    </div>



                </div>
            </div>

                </div>
            </div>




        </form>

    </div>

@endsection
