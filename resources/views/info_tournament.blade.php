@extends('layouts.app')


@section('css')
<link  href="{{ asset ('/css/tournament_info/tournament_info.css')}}" rel="stylesheet">
@endsection


@section('content')
{{-- {{$data}} --}}
@if (isset($data))
                
<div class="container-fluied info_background">

        <div class="row d-flex justify-content-between" >
          <div class="col-9">   
              <div class="row">
                <div class="col-4">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Football_iu_1996.jpg/1200px-Football_iu_1996.jpg" width="180px" height="350px" alt="">

                </div>
                <div class="col-8 d-flex flex-column  justify-content-between">
                 

<div class=" d-flex flex-column  justify-content-between p-1">
  <div>
    <div class="tourn_name">
      {{$data->tourn_name}}   
      </div>
      <div class="ammount_of_players">
{{$data->tourn_teams_amount}} player
      </div>
      <div class="description">
         {{$data->tourn_desciption}}
      </div>
      <div>
     Prize :    {{$data->tourn_prize}} jd
         
      </div>

  </div>
  <div>

 <div class="ammount_of_players">
                     {{$data->tourn_start_data}}    
    </div>
  </div>
                             
   </div>   
   <div>
    @if( Auth::user()->tourn_joined == 0)

    
      <a href="/reg_to_tourn/id/{{Auth::user()->id}}/{{$data->tourn_id}}" class="btn  btn-lg active" role="button" aria-pressed="true">Register</a>

    @else 
      <div class="alert alert-success" role="alert">
        You are already in a tournement
      </div>
    

    @endif
</div>


                </div>
               
              </div>  
           
    
     </div>

      <div class="col-2 d-flex flex-column  ">
        <div class="row h-50">
          <div class="col">
            Tournament Creator
          {{$data->name}} 
          </div>
         
        </div>
        <div class="row h-50">
          <div class="col">
c
          </div>
          
        </div>
      
      
    </div>
    </div> 
   </div>
        
       
  @endif  

@if((session('done') != null))
  <div class="alert alert-success" role="alert">
    {{ session('done') }}
</div>
@endif

@endsection
