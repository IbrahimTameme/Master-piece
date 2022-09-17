@extends('layout.master')
@section('title','Pending Users')
@section('content')

<div class="container-fluid py-4">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3"> Pending Users</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="align-middle text-center text-sm">ID</th>
                    <th class="align-middle text-center text-sm">Name</th>
                    <th class="align-middle text-center text-sm">Password</th>
                    
                    <th class="align-middle text-center text-sm">Deny</th>
                  </tr>
                </thead>
                <tbody> 
                  @foreach($ud as $data)
                  <tr>
                    <td>
                        <div class="align-middle text-center text-sm">
                          <h6 class="align-middle text-center text-sm">{{$data->id}}</h6>
                        </div>
                    </td>
                    <td>
                      <p class="align-middle text-center text-sm">{{$data->name}} </p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-primary">{{$data->password}} </span>
                    </td>
                   
                    <td class="align-middle text-center text-sm">
                        <a href="{{url('denyUser/id/'.$data->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="delete user"><i class="fas fa-ban" style="font-size:30px ; color:red"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    


@endsection