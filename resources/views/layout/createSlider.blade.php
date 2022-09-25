@extends('layout.master')  
@section('content')

<style>
    .card-header:first-child {
            color: white;
            background:#2E0249;
        
    }
    button.btn.btn-primary {
    color: #fff;
    border-color:#2E0249;
    background: #2E0249;
        
    }
    
    div.card{
        color: #2E0249;
    }
        </style>
        <html>
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> <h4 style="text-align:center; color:white"> Add Request </h4> </div>
                    <div class="card-body">
                        
                        <form  action="{{url('createSlider')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-7">
                                  
                                <label for="name" class="col-md-4 col-form-label text-md-end">Tournament Name</label>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br>
                                    <span style="color: red;">@error('name'){{$message}}@enderror </span>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-7">
                                  
                                <label for="desc" class="col-md-4 col-form-label text-md-end">Tournament descrption</label>
                                    <input id="desc" type="text" name="desc" value="{{ old('desc') }}" required autocomplete="name" autofocus><br>
                                    <span style="color: red;">@error('desc'){{$message}}@enderror </span>

                                </div>
                            </div>
                          
    
                            <div class="row mb-3">
                                <div class="col-md-7">
                                    <label for="img" class="col-md-4 col-form-label text-md-end">Number of teams</label>
                                    <input id="img" type="file" name="img" value="{{ old('img') }}" required autocomplete="img" autofocus><br>
                                    <span style="color: red;">@error('img'){{$message}}@enderror </span>
                                </div>
                            </div>
                            
                        
                            <div class="row mb-0">
                                <div class="col-md-7 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Submit </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
    @endsection