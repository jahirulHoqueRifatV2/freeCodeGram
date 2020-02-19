@extends('layouts.app')

@section('content')
    
    <div class="container">

        <form action="/post" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1>Add New Post</h1>
                    </div>
                    <div class="form-group row">
                            <label for= 'caption' class="col-md-4 col-form-label ">Post Caption</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id='caption' type="text" class="form-control @error('caption') is-invalid @enderror" name='caption' value="{{ old('caption') }}" required autocomplete=caption autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('caption') }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}

                            
                    </div>

                    <div class="row">

                
                        <label for="image" class="col-md-4 col-form-label">Post Image</label>
                        
                        <input type="file" class="form-control-file" id="image" name ="image">
                        
                        @error('image')
                            
                                <strong>{{ $errors->first('image') }}</strong>
                            
                        @enderror
                        
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>

                    

                </div>
            </div>


            

        </form>
        
    </div>

@endsection