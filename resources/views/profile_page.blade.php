@extends('layouts.app')


@section('css')
<link  href="{{ asset ('/css/profile_info/profile.css')}}" rel="stylesheet">

@endsection

@section('content')
@if((session('done') != null))
<div class="alert alert-success" role="alert">

  {{ session('done') }}
  @endif 
  </div>

<div class="container bootstrap snippets bootdey">
  <div class="row">
      <!-- BEGIN USER PROFILE -->
      <div class="col-md-12">
        <div class="grid profile">
          <div class="grid-header">
            <div class="row ">
              <div class="col-sm-12 d-flex flex-row-reverse" >
               <a href="/edit_profile"><button class="btn quote_btn-container update_profile_button " href="/edit_profile" >Edit profile</button></a> 
              </div>
            </div>
            
            <div class="col-xs-2">
              <img src="img/{{ Auth::user()->img}}" class="imgg" alt="">
            </div>
            <div class="col-xs-7">
              <h3>{{  Auth::user()->name}}</h3>
              <p>@bootdey</p>
           
            </div>
           
          </div>
          <div class="grid-body">
            
            <div class="tab-content">
              <!-- BEGIN PROFILE -->
              <div class="tab-pane active" id="profile">
                <p class="lead">My Profile</p>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <p><strong>Email:</strong> <a href="mailto:{{  Auth::user()->email}}">{{  Auth::user()->email}}</a></p>
                    <p><strong>Joined on:</strong> {{  Auth::user()->created_at}}</p>
                    <p><strong>Hobbies:</strong> {{  Auth::user()->hobbies}}</p>
                    <p><strong>Skills:</strong>    <span class="label label-primary">{{  Auth::user()->skills}}</span></p>
                  </div>
                  <div class="col-md-6">
                    <p><strong>Address:</strong>{{  Auth::user()->location}}</p>
                    <p><strong>Phone:</strong> {{  Auth::user()->number}}</p>
                    <p><strong>age</strong>{{  Auth::user()->age}}</p>
                    <p><strong>Reputation:</strong> <span class="text-green"><i class="fa fa-angle-up"></i> 2000</span></p>
                  </div>
                </div>
               
              </div>
           
            </div>

            <div class="grid-body">
            
              <div class="tab-content">
                <!-- BEGIN PROFILE -->
                <div class="tab-pane active" id="profile">
                  <p class="lead text-uppercase">CREATED TOURNAMENTS</p>
                  <h5 class="">
                  Most recent tournaments
                  </h5>
                  @foreach ($view1 as $data)

                  <div class="card m-2 profile_tournament" >
                    <div class="card-body row d-flex align-items-center justify-content-around">
                      <div class="col-sm-12 col-md-3">
                        <img src="/images/{{$data->category_image}}" width="100px" height="100px" alt="">
                      </div>
                      
                     <div class="col-sm-12 col-md-3">
                                           <p><b>Tournament name:</b>  {{$data->tourn_name}}</p>

                     </div>

                     <div class="col-sm-12 col-md-3">
                        <p> <b>Tournament Category:</b> {{$data->category_name}}</p>
                     </div>
                  
                    
                    </div>
                  </div>
                      
                  @endforeach
                 
                  <div class="row">
                   
                  </div>
                 
                </div>
             
              </div>


           
              <!-- END PROFILE -->
  



        </div>
      </div>
    </div>
  </div>
</div>
@endsection










{{-- 
<style>
  .no_active
  {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
    height: 300px;
    width: 100%;
   text-align: center;
  }
  .no_active .btn
  {
    
    display: inline;
    /* margin-left: 35%; */
  }
  .text_no_active
  {
    font-size: 3rem;
    color: black;
    margin: 5%;

  }
  .active_vol_header
  {
    text-align: center;
    font-weight: bold;
  }

  #editPic{
    display: none;
}
.cont{
    width: 60%;
}
.butt{
    background-color: rgb(245, 245, 220,0);
    border: none;
}
#use{
    display: none;
}
  </style>
<div class="page-header"style="background-image: url('https://www.nehhc.com/wp-content/uploads/2016/11/ThinkstockPhotos-578806154.jpg%27');
 padding: 90px 0 40px 0;"  >
            <div class="container" >
                <div class="row">
                    <div class="col-12">
                    </div>
                    <div class="col-12">
                    <h1 class="page_title">Volunteer Page</h1>
                    </div>
                </div>
</div>
</div>

@if (session('accepted'))
        <div class="alert alert-success" role="alert">
            {{ session('accepted') }}
        </div>
    @endif
<div class="container ">
    <div class="main-body">
    
        
    
         
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="img/{{  Auth::user()->img }}" alt="Admin" class="rounded-circle" height="150" width="150">
                <a href="/addItem"> edit</a>
                
                <div class="mt-3">
                  <h4>{{  Auth::user()->name}}</h4>
                  <div class="row d-flx">
                  <form action="/added" method="post" enctype="multipart/form-data" id="editPic">
                        @csrf
                        <input type="file" name="img" required style="font-size:small;">
                        <input type="submit" name="addItem" value="edit" style="font-size:small;">
                  </form>
                  </div>
                  <button type="subimt" onclick="show()" class="butt"><i class="fa-solid fa-pen-to-square" id ="ed"></i></button>
                 
                  <a href=""></a>
                  
                </div>
              </div>
            </div>
          </div>
        
          <div class="card mt-3" id="use1">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0">Full Name</h6>
                <span class="text-secondary">{{  Auth::user()->name}}</span><span class="text-secondary">{{  Auth::user()->lname}}</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Email</h6>
                <span class="text-secondary">{{  Auth::user()->email}}</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Phone</h6>
                <span class="text-secondary">{{  Auth::user()->phone}}</span>
              </li>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Time From</h6>
                <span class="text-secondary">{{  Auth::user()->time}}</span>
              </li>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Time To</h6>
                <span class="text-secondary">{{  Auth::user()->timeTo}}</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <div class="row">
                <div class="col-sm-12">
                  <button class="btn " onclick="show1()" style="background-color: #008E89; color:white;" >Edit</button>
                </div>
              </li>
            </ul>
          </div>
          <!--  -->
          <form  method="post" action="{{url('/updateuser')}}" id='use'>
            @csrf
          <div class="card mt-3">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0">First Name</h6>
                <input type="text" name="name" value="{{  Auth::user()->name}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0">last Name</h6>
                <input type="text" name="lname" value="{{  Auth::user()->lname}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Email</h6>
              <input type="text" name="email" value="{{  Auth::user()->email}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Phone</h6>
              <input type="text" name="phone" value="{{  Auth::user()->phone}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Time From</h6>
              <input type="datetime-local" name="time" value="{{  Auth::user()->time}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Time To</h6>
              <input type="datetime-local" name="timeTo" value="{{  Auth::user()->timeTo}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <div class="row">
                <div class="col-sm-12">
                 
                  <button class="btn " type="submit" style="background-color: #008E89; color:white;" > edit</button>
                </div>
              </li>
            </ul>
          </div>
          </form>
        </div>
                </div>
                </div>
                </div>
              </div>


         



             
              



            </div>
          </div>

        </div>
    </div>

    <script>
      function show(){
        document.getElementById('editPic').style.display="block";
        document.getElementById('ed').style.display="none";
      }
      function show1(){
        document.getElementById('use').style.display="block";
        document.getElementById('use1').style.display="none";
      }
    </script>
 --}}
