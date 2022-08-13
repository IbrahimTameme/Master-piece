
@extends('layouts.app')


@section('css')
<link  href="{{ asset ('/css/alter/alter.css')}}" rel="stylesheet">

@endsection

@section('content')



<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
   
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="img/{{  Auth::user()->img}}" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <form action="/added" method="post" enctype="multipart/form-data" id="editPic">
                        @csrf
                        <input type="file" name="img" required style="font-size:small;">
                        <input type="submit" name="addItem" value="edit" style="font-size:small;">
                  </form>
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form method="post" action="{{url('/updateuser')}}" id='use'> 
                        @csrf
                    
                        <!-- Form Group (name)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="name">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your username"  value="{{  Auth::user()->name}}">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (email)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="email">E-mail</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Enter your first name" value="{{  Auth::user()->email}}">
                            </div>
                            <!-- Form Group (age)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="age">Age</label>
                                <input class="form-control" id="age"  name="age" type="text" placeholder="Enter your last name" value="Luna">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (skills)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="skills">Skills</label>
                                <input class="form-control" id="skills" name="skills" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
                            </div>
                            <!-- Form Group (hobbies)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="hobbies">Hobbies</label>
                                <input class="form-control" id="hobbies" name="hobbies" type="text" placeholder="Enter your location" value="San Francisco, CA">
                            </div>
                        </div>
                        <!-- Form Group (location)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="location">Location</label>
                            <input class="form-control" id="location" name="location" type="text" placeholder="Enter your email address" value="name@example.com">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group ( number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="number">Number</label>
                                <input class="form-control" id="number" name="number" type="text" placeholder="Enter your phone number" value="555-123-4567">
                            </div>
                           
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary"  type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
