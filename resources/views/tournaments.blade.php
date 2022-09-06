@extends('layouts.app')


@section('css')
<link  href="{{ asset ('/css/tournaments_cards/card.css')}}" rel="stylesheet">
{{-- tournament_info --}}
@endsection


@section('content')

    
    
    <section class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col text-center mb-5">
               <h1 class="display-4">Bootstrap 4 Cards With Background Image</h1>
               <form method="post" action="{{url('/tournaments')}}" id='use'> 
                @csrf
               <select class="form-select" id="category"  name="category" type="text" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="*">All</option>       
                @foreach ($view1 as $data)
                <option value= {{$data->category_id}}>
                 
                  {{$data->category_name}}</option>
                @endforeach
              </select>    
              <input type="submit" value="Submit">
            </form>
                  </div>
          </div>
        <div class="row">
     
      @foreach($view2 as $data) 
      
      <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://img.freepik.com/free-vector/soccer-volleyball-baseball-rugby-equipment_1441-4026.jpg');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
       <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
           <small class="card-meta mb-2">Category</small>
           <h4 class="card-title mt-0 "><a class="text-white" herf="#">{{$data->tourn_name}}</a></h4>
           <h6 class="card-title mt-0 "><a class="text-white" herf="#">{{$data->tourn_desciption}}</a></h6>

          <small><i class="far fa-clock"></i> Start date {{$data->tourn_start_data}} </small>
          <small class="my-0 text-white d-block"> {{$data->tourn_teams_amount}} Teams</small>

         </div>
         <div class="card-footer">
          <div class="media">
 <div class="media-body">

   <a href="info_tournament/id/{{$data->tourn_id}}" class="btn  btn-lg active" role="button" aria-pressed="true">Accept</a>

    <small>Created by {{$data->name}}</small>



 </div>
</div>
         </div>
       </div>
     </div></div>
    
           
    
    @endforeach
    
    
     
      </div>
        
      </div>
      </section>

    @endsection



   
      