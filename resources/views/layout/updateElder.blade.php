@extends('layout.master')  
@section('title','Update Requests')

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
                    <div class="card-header"> <h4 style="text-align:center"> Update Request </h4>
                    </div>
                    <div class="card-body" style="margin-top:-2%" >
                    @foreach($update as $data)
                        <form action="{{url('/updateElder/id/'.$data->tourn_id)}}" method="post">
                          @csrf
                          @method('PUT')
                              <div class="row mb-3">
                                <div class="col-md-12">
                                <label for="name" class="col-md-5  text-md-end">Name</label>
                                    <input type="text" name="name" value="{{$data->tourn_name}}" required autocomplete="name" autofocus>
                                    <span> <label class="col-md-5 text-md-end" for="tourn_category">Category</label>
                                        <select class="" id="tourn_category"  name="tourn_category" type="text" placeholder="Enter your category" >
                                            <option value="1">Football</option>
                                            <option value="2">Basketball</option>
                                            <option value="3">Swimming</option>
                                            <option value="4">billiards</option>
                                            <option value="5">E-sport</option>
                                        </select></span>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                              <div class="col-md-12">
                              <label for="name" class="col-md-5  text-md-end">Number of teams</label>
                                  <input type="text" name="tourn_teams_amount" value="{{$data->tourn_teams_amount}}" required  autofocus>
                                  <span><label for="name" class="col-md-5  text-md-end">Description</label>
                                  <input type="text" name="tourn_desciption" value="{{$data->tourn_desciption}}" required  autofocus></span>
                              </div>
                          </div>
                            
                           
                          </div>
                          <span><label for="name" class="col-md-5  text-md-end">Start date</label>
                          <input type="date" name="tourn_start_data" value="{{$data->tourn_start_data}}" required autofocus></span>
                            <div class="row mb-3">
                              <div class="col-md-12">
                            
                                  <span><label class="col-md-5 text-md-end">End date</label>
                                    <input type="date" name="tourn_end_data" value="{{$data->tourn_end_data}}" required  autofocus></span>
                              </div>
                          </div>
                          
                           
                            <div class="row mb-3">
                              <div class="col-md-12">
                              <label for="name" class="col-md-5  text-md-end">Prize</label>
                                  <input type="text" name="tourn_prize" value="{{$data->tourn_prize}}" required autofocus>
                                <span><label  class="col-md-5 text-md-end">Is set</label>
                                <input type="text" name="is_set" value="{{$data->is_set}}" required autocomplete="name" autofocus></span>
                              </div>
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
    