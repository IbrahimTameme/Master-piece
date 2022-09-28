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
        <div class=" col-12 col-lg-3  ">

          <form method="post" action="{{url('/tournaments')}}" id='use'> 
            @csrf
           <select class="form-select" id="category"  name="category" type="text" aria-label="Default select example" >
            <option selected disabled >Open this select menu</option>
            <option value="*">All</option>       
            @foreach ($view1 as $data)
            <option value= {{$data->category_id}}>
             
              {{$data->category_name}}</option>
            @endforeach
          </select>    
          <input type="submit" class=" btn-outline-dark form-control " id="butbut" value="Submit">
          {{-- <button type="submit" class=" btn-outline-dark form-control "  ></button> --}}
        </form>
        </div><ul class="cards col-12 col-lg-8  gap-2 mt-5 d-flex align-items-center justify-content-around ">
      @foreach($view2 as $data) 

            <div class="card col-8 col-lg-5  p-3 " >
              <div class="card_image"><img src="/images/{{$data->category_image}}"></div>
              <div class="card_content  h-100 d-flex flex-column">
                <h2 class="card_title">{{$data->tourn_name}}</h2>
                <p class="">{{$data->tourn_desciption}} !</p>
                <hr>
                <small class=" "> Created by: {{$data->name}} lore</small>
          <small class=" "><i class="far   fa-clock"></i> Start date {{$data->tourn_start_data}} </small>
          <small class="my-0   d-block"> {{$data->tourn_teams_amount}} Teams</small>
                <a type="submit" id="butbut" class="btn card_btn  border-secondary text-secondary mt-auto  "  href="info_tournament/id/{{$data->tourn_id}} "role="button" aria-pressed="true"> <span id="tt">Start</span> </a>
              </div>
            </div>
         
  
     
    
    @endforeach

  </ul>
    @endsection


   
      