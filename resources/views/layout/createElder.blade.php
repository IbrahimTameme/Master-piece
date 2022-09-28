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
                        
                        <form  action="{{url('createElder')}}" method="post">
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
                                    <label for="category" class="col-md-4 col-form-label text-md-end">category</label>
                                    <select class="form-control" id="category"  name="category" type="text" placeholder="Enter your category" >
                                        <option value="1">Football</option>
                                        <option value="2">Basketball</option>
                                        <option value="3">Tennis</option>
                                     
                                    </select><br>
                                    <span style="color: red;">@error('category'){{$message}}@enderror </span>

                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-7">
                                    <label for="team_ammount" class="col-md-4 col-form-label text-md-end">Number of teams</label>
                                    <input id="team_ammount" type="text" name="team_ammount" value="{{ old('team_ammount') }}" required autocomplete="team_ammount" autofocus><br>
                                    <span style="color: red;">@error('team_ammount'){{$message}}@enderror </span>
                                </div>
                            </div>
                            <div class="row mb-3"> 
                                <div class="col-md-7">
                                    <label for="descrption" class="col-md-4 col-form-label text-md-end">Descrption</label>
                                    <input id="descrption" type="text" name="descrption" value="{{ old('descrption') }}" required autocomplete="descrption" autofocus><br>
                                    <span style="color: red;">@error('descrption'){{$message}}@enderror </span>
                                    </div>
                                </div>   
                               <div class="row mb-3">
                                <div class="col-md-7">
                                    <label class="small mb-1" for="start_date">Start date</label>
                            <input class="form-control" id="start_date" name="start_date" type="date" >
                                    <br>
                                    <span style="color: red;">@error('start_date'){{$message}}@enderror </span>
                                </div>
                            </div>
    
                            <div class="row mb-3"> 
                            <div class="col-md-7">
                                <label class="small mb-1" for="end_date">End date</label>
                                <input class="form-control" id="end_date" name="end_date" type="date" >
                                        <br>
                                        <span style="color: red;">@error('end_date'){{$message}}@enderror </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-7">
                                <label for="location" class="col-md-4 col-form-label text-md-end">location</label>
                                    <input id="location" type="text" name="location" value="{{ old('location') }}" autofocus><br>
                                    <span style="color: red;">@error('location'){{$message}}@enderror </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-7">
                                <label for="prize" class="col-md-4 col-form-label text-md-end">prize</label>
                                    <input id="prize" type="text" name="prize" value="{{ old('prize') }}" required  autofocus><br>
                                    <span style="color: red;">@error('prize'){{$message}}@enderror </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-7">
                                <label for="creator" class="col-md-4 col-form-label text-md-end">Creator </label>
                                    <input id="creator" type="text" name="creator" value="{{ old('creator') }}" required  autofocus><br>
                                    !note use creator ID
                                    <span style="color: red;">@error('creator'){{$message}}@enderror </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-7">
                                <label for="staduim" class="col-md-4 col-form-label text-md-end">staduim</label>
                                    <input id="staduim" type="checkbox" name="staduim" value="1" required  autofocus><br>
                                    <span style="color: red;">@error('staduim'){{$message}}@enderror </span>
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