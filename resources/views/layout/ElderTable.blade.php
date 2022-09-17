@extends('layout.master')
@section('title','Elder')
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
                    <th class="align-middle text-center text-sm">Category</th>
                    <th class="align-middle text-center text-sm">Team Amount</th>
                    <th class="align-middle text-center text-sm">Description</th>
                    <th class="align-middle text-center text-sm">Start date</th>
                    <th class="align-middle text-center text-sm">End date</th>
                    <th class="align-middle text-center text-sm">Prize </th>
                    <th class="align-middle text-center text-sm">Staduiom </th>
                    <th class="align-middle text-center text-sm">Referee</th>
                    <th class="align-middle text-center text-sm">Tools</th>
                    <th class="align-middle text-center text-sm">Action</th>
                  </tr>
                </thead>
                <tbody> 
                  @foreach($ud as $data)
                  <tr>
                    <td>
                        <div class="align-middle text-center text-sm">
                          <h6 class="align-middle text-center text-sm">{{$data->tourn_id}}</h6>
                        </div>
                    </td>
                    <td>
                      <p class="align-middle text-center text-sm">{{$data->tourn_name}} </p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-primary">{{$data->tourn_category}} </span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span>{{$data->tourn_teams_amount	}} </span>
                    </td> 
                    <td class="align-middle text-center text-sm">
                      <textarea>{{$data->tourn_desciption}} </textarea>
                    </td> <td class="align-middle text-center text-sm">
                      <span>{{$data->tourn_start_data}} </span>
                    </td> <td class="align-middle text-center text-sm">
                      <span>{{$data->tourn_end_data}} </span>
                    </td>
                  </td> 
                  <td class="align-middle text-center text-sm">
                    <span>{{$data->tourn_prize}} </span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span>{{$data->tourn_staduim}} </span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span>{{$data->tourn_referee}} </span>
                  </td>

                    <td class="align-middle text-center">
                      <span>{{$data->tourn_tools}} </span>
                    </td>

                    
                    <td class="align-middle text-center text-sm">
                      <a href="{{url('delete/id/'.$data->tourn_id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="delete user"><i class="fa fa-trash" style="color:red" aria-hidden="true"></i></a><br>
                      <a href="{{url('edit/id/'.$data->tourn_id)}}"><i class="fas fa-edit" style="color:green"></i>
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