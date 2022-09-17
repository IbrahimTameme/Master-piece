@extends('layout.master')
@section('title','dashboard')
@section('content')
<style>

button.btn.btn-primary {
color: #fff;
border-color:#2E0249;
background: #2E0249;

}


</style>
  <div class="container mt-5">
    <div class="row ml-5">
      <div class="col-xl-3 col-sm-8 mb-xl-0 mb-4 ml-5">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="far fa-flag opacity-10"></i>
            </div>
            <div class="text-end pt-1">
              <p class="text mb-0 text-capitalize ">Contries </p>
              <h4 class="mb-0 mt-2" style="margin-right:45%">2</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <p class="text-sm"style=" text-align:center">+2 Than Last Month</p>
          
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
            </div>
            <div class="text-end pt-1">
              <p class="text mb-0 text-capitalize" style="text-align:right">New Users </p>
              <h4 class="mb-0 mt-2" style="margin-right:50%">{{$users_count}}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
            <p class="text-sm"style=" text-align:center">For Last Month </p>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
            </div>
            <div class="text-end pt-1">
              <p class="text mb-0 text-capitalize" style="text-align:right"> Requests </p>
              <h4 class="mb-0 mt-2" style="margin-right:50%">{{$elders_count}}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
            <p class="text-sm"style=" text-align:center">For Last Month </p>
        </div>
      </div>
      </div>
    </div>

    <div class="row mt-4" >
      <div class="col-lg-5 col-md-6 mt-4 mb-4 ml-5">
        <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          </div>
          <div class="card-body">
            <h6 class="mb-0 mt-4" style="text-align:center"><i class="material-icons text-sm my-auto me-1">schedule</i> Users</h6>
            <p class="mt-2" style="text-align:center">Users and Admins</p>
            <hr class="dark horizontal">
            <div class="d-flex ml-5">
            <a href="{{url('PendingUsers')}}"style="margin-left:28%;margin-bottom:9%"><button class="btn bg-gradient-primary" >Show Users </button></a>
            </div>
          </div>
        </div>
      </div>
     <div class="col-lg-5 col-md-6 mt-4 mb-4 ml-5">
        <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          </div>
          <div class="card-body">
            <h6 class="mb-0 mt-4" style="text-align:center"><i class="material-icons text-sm my-auto me-1">schedule</i>Pending Requests</h6>
            <p class="mt-2" style="text-align:center">Requests Waiting to Your Approval</p>
            <hr class="dark horizontal">
            <div class="d-flex ml-5" >
              <a href="{{url('PendingRequests')}}"style="margin-left:28% ; "><button class="btn bg-gradient-primary" >Show Requests </button>
            </div>
          </div>
        </div>
      </div>
    
    </div>

        @endsection