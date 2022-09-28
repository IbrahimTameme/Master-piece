
@extends('layouts.app')


@section('css')
<link  href="{{ asset ('/css/form/form.css')}}" rel="stylesheet">

@endsection

@section('content')



<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    
   
    <hr class="mt-0 mb-4">
    <div class="row">
        
      
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4 ">
                <div class="card-header">Tournament details</div>
                <div class="card-body ">
                    <form method="post" action="{{url('/create_tournament')}}" id='use'> 
                        @csrf
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="name">Name</label>
                                <input class="form-control" id="name" name="name" type="name" placeholder="Enter tournament name" >
                            </div>
                            <!-- Form Group (category)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="category">Category</label>
                                <select class="form-control" id="category"  name="category" type="text" placeholder="Enter your category" >
                                    <option value="1">Football</option>
                                    <option value="2">Basketball</option>
                                    <option value="3">Tennis</option>
                                    
                                </select>
                            </div>
                        </div>
                          <!-- Form Row        -->
                          <div class="row gx-3 mb-3">
                            <!-- Form Group (number_of_teams)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="number_of_teams">Number of teams</label>
                                <input class="form-control" id="number_of_teams" name="number_of_teams" type="text" placeholder="Enter your organization name" >
                            </div>
                            <!-- Form Group (prize)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="prize">Prize</label>
                                <input class="form-control" id="prize" name="prize" type="text" placeholder="Enter your location" >
                            </div>
                        </div>
                      
                      
                     
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                              <!-- Form Group (start_date)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="start_date">Start date</label>
                            <input class="form-control" id="start_date" name="start_date" type="date" >
                        </div>
                            <!-- Form Group ( end_date)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="end_date">End date</label>
                                <input class="form-control" id="end_date" name="end_date" type="date" >
                            </div>
                            
                        </div>
                            <!-- Form Group (description)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="description">description</label>
                                <input class="form-control" id="description" name="description" type="text" placeholder="Enter your tournament description"  >
                            </div>
                        <!-- Save changes button-->
                       
<div class="text-center">

    <button class="btn quote_btn-container w-25  "  type="submit"> SUBMIt</button>
</div>
                        
                    </form>
                </div>
            </div> 
        </div>
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile mb-2" style="height: 400px ; width:300px " src="https://pocketoptionclub.com/images/pocketoption/1609998682394/original/how-to-participate-the-tournament-in-pocket-option-claiming-a-prize.jpg" alt="">
                    <!-- Profile picture help block-->
                  
            </div>
        </div>

        
    </div>

    
</div>


@endsection
