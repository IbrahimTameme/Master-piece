@extends('layout.master')  
@section('title','Update User')

@section('content')
<style>

    button.btn.btn-primary {
    color: #fff;
    border-color:#008E89;
    background: #008E89;
    }
    
    div.card{
        color: #008E89;
    }
        </style>
    <html>
    <body>
    <div class="container">
        <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header"> <h4 style="text-align:center"> Update User </h4>
                    </div>
                    <div class="card-body" style="margin-top:-2%" >
                    @foreach($update as $data)
                        <form action="{{url('/updateus/id/'.$data->id)}}" method="post">
                          @csrf
                          @method('PUT')
                              <div class="row mb-3">
                                <div class="col-md-12">
                                <label for="name" class="col-md-5  text-md-end">Name</label>
                                    <input type="text" name="name" value="{{$data->name}}" required autocomplete="name" autofocus>
                                   
                                </div>
                            </div>
    
                            <div class="row mb-3">
                              <div class="col-md-12">
                              <label for="name" class="col-md-5  text-md-end">Profile Image</label>
                                  <input type="file" name="img" value="{{$data->img}}"    autofocus>
                                 <label class="col-md-5 text-md-end ">Phone Number</label>
                                    <input type="text" name="number" value="{{$data->number}}" required  autofocus>
                              </div>
                          </div>
                            
                            <div class="row mb-3">
                              <div class="col-md-12">
                                <label for="name" class="col-md-5  text-md-end">Skills</label>
                                  <input type="text" name="skills" value="{{$data->skills}}"   autofocus>
                              <span ><label for="name" class="col-md-5  text-md-end">Hobbies</label>
                                  <input type="text" name="hobbies" value="{{$data->hobbies}}"   autofocus>
                                   </span>
                              </div>
                          </div>
                            <div class="row mb-3">
                              <div class="col-md-12">
                              <label for="name" class="col-md-5  text-md-end">Email</label>
                                  <input type="email" name="email" value="{{$data->email}}" required autofocus>
                                  <span><label class="col-md-5 text-md-end">Age </label>
                                  <input type="text" name="age" value="{{$data->age}}" required  autofocus></span>
                              </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-md-12">
                            <label for="name" class="col-md-5  text-md-end">Location</label>
                                <input type="text" name="location" value="{{$data->location}}" required autofocus>
                             
                            </div>

                           
                            <div class="row mb-0 ">
                                <div class="col-md-4 offset-md-4 mt-3">
                                    <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </body>
    </html>
    @endsection
    