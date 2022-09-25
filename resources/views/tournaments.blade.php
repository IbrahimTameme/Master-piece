@extends('layouts.app')

@section('css')
{{-- <link  href="{{ asset ('/css/tournaments_cards/card.css')}}" rel="stylesheet"> --}}
<link  href="{{ asset ('/css/tournaments_cards/card1.css')}}" rel="stylesheet">
{{-- tournament_info --}}
@endsection



@section('content')




    
    <section class="wrapper">
<div class="container">
  <div class="row">

  </div>
</div>
          
        

          
     <div class="container">

      <div class="row ">
        <div class=" col-3  mt-5">

          <form method="post" action="{{url('/tournaments')}}" id='use'> 
            @csrf
           <select class="form-select" id="category"  name="category" type="text" aria-label="Default select example" >
            <option selected >Open this select menu</option>
            <option value="*">All</option>       
            @foreach ($view1 as $data)
            <option value= {{$data->category_id}}>
             
              {{$data->category_name}}</option>
            @endforeach
          </select>    
          <input type="submit" class=" btn-outline-dark form-control " id="butbut" value="Submit">
          {{-- <button type="submit" class=" btn-outline-dark form-control "  ></button> --}}
        </form>
        </div><ul class="cards col-8  gap-2 mt-5 ">
      @foreach($view2 as $data) 

            <div class="card col-3">
              <div class="card_image"><img src="https://parkers-images.bauersecure.com/wp-images/17053/600x400/lotus_eletre.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">{{$data->tourn_name}}</h2>
                <p class="">{{$data->tourn_desciption}} !</p>
                <hr>
                <small class=" "> Created by: {{$data->name}} lore</small>
          <small class=" "><i class="far   fa-clock"></i> Start date {{$data->tourn_start_data}} </small>
          <small class="my-0  d-block"> {{$data->tourn_teams_amount}} Teams</small>
                <a type="submit" id="butbut" class="btn card_btn  border-secondary text-secondary  "  href="info_tournament/id/{{$data->tourn_id}} "role="button" aria-pressed="true"> <span id="tt">Start</span> </a>
              </div>
            </div>
         
  
      {{-- <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card  card-has-bg click-col" style="background-image:url('https://img.freepik.com/free-vector/soccer-volleyball-baseball-rugby-equipment_1441-4026.jpg');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
       <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
           <small class="card-meta mb-2" style="color: blueviolet">Category</small>
           <h4 class="card-title mt-0 "><a class="text-white" herf="#"></a></h4>
           <h6 class="card-title mt-0 "><a class="text-white" herf="#"></a></h6>   
         </div>

          <div class="card-footer">
          <div class="media">
          <div class="media-body">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
            --}}
    
    @endforeach

  </ul>
    @endsection


   
      