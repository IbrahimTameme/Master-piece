@extends('layout.master')
@section('title','Users')
@section('content')

<div class="row mt-4" >
    <div class="col-lg-5 col-md-6 mt-5 ml-5">
      <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        </div>
        <div class="card-body">
          <h6 class="mb-0 mt-4" style="text-align:center"><i class="material-icons text-sm my-auto me-1">schedule</i> &nbsp;ADMINS PANEL</h6>
          <p class="mt-2" style="text-align:center">Admins panel to delete admins</p>
          <hr class="dark horizontal">
          <div class="d-flex ml-5">
          <a href="{{url('PendingUsers')}}"style="margin-left:15% ; padding-bottom:5%"><button class="btn bg-gradient-primary" >Show Pending Users </button></a>
          </div>
        </div>
      </div>
    </div>
   <div class="col-lg-5 col-md-6 mt-5 ml-5">
      <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        </div>
        <div class="card-body">
          <h6 class="mb-0 mt-4" style="text-align:center"><i class="fas fa-check-circle" style="font-size:15px"></i> &nbsp; Accepted Users</h6>
          <p class="mt-2" style="text-align:center">Users who Have Been Aproved </p>
          <hr class="dark horizontal">
          <div class="d-flex ml-5" >
            <a href="{{url('utable')}}"style="margin-left:15%"><button class="btn bg-gradient-primary" >Show Accepted Users </button>
          </div>
        </div>
      </div>
    </div>
  
  </div>
@endsection