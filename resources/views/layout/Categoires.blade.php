@extends('layout.master')
@section('title','category')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <a href="{{url('createElder')}}" class="card-link btn w-10 " style="background-color:#2E0249 ; color:white; margin-left:85%">add</a>
        </div>
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Accepted Requests</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                 
                  <tr>
                    <th class="align-middle text-center text-sm">ID</th>
                    <th class="align-middle text-center text-sm">Name</th>
                    <th class="align-middle text-center text-sm">Image</th>
                    
                  </tr>
                </thead>
                <tbody> 
                  @foreach($category as $data)
                  <tr>
                    <td>
                        <div class="align-middle text-center text-sm">
                          <h6 class="align-middle text-center text-sm">{{$data->category_id}}</h6>
                        </div>
                    </td>
                    <td>
                      <p class="align-middle text-center text-sm">{{$data->category_name}} </p>
                    </td>
                    
                    <td class="align-middle text-center text-sm">
                      <span>{{$data->category_image	}} </span>
                    </td> 
                  

                    
                    <td class="align-middle text-center text-sm">
                      <a href="{{url('delete_category/id/'.$data->category_id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="delete user"><i class="fa fa-trash" style="color:red" aria-hidden="true"></i></a><br>
                      
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    
@endsection