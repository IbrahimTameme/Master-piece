@extends('layout.master')  
@section('content')
<style>
    .card-header:first-child {
            color: white;
            background:#2E0249;
        
    }
    button.btn.btn-primary {
    color: #fff;
    border-color:#2E0249;
    background: #2E0249;
        
    }
    
    div.card{
        color: #2E0249;
    }
        </style>
<html>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header">  <h4 style="text-align:center; color:white"> ADD USER </h4>
                </div>
                <div class="card-body">
                    
                    <form  action="{{url('create')}}"method="post">
                        @csrf
                        <div class="row ">
                            <div class="col-md-6">
                            <label for="name" class="col-md-4 col-form-label text-md-end">First Name</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span style="color: red;">@error('name'){{$message}}@enderror </span>
                            </div>
                        </div>
                      
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span style="color: red;">@error('email'){{$message}}@enderror </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="number" class="col-md-4 col-form-label text-md-end">Phone Number</label>
                                <input id="number" type="number" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>
                                <span style="color: red;">@error('number'){{$message}}@enderror </span>
                            </div>
                        </div>

                 

                      

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="age" class="col-md-4 col-form-label text-md-end">Age</label>
                                <input id="age" type="text" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
                                <span style="color: red;">@error('age'){{$message}}@enderror </span>

                            </div>
                        </div>
             

                     

                    <div class="row mb-3">
                            <div class="col-md-7">

                            <label for="img" class="col-md-3 col-form-label text-md-end">img</label>
                        <input type="file" name="img" placeholder="Image">
                    </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="location" class="col-md-4 col-form-label text-md-end">location</label>
                    <input type="text" name="location" required>
                    </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="skills" class="col-md-4 col-form-label text-md-end">skills</label>
                    <input type="text" name="skills" required>
                    </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="hobbies" class="col-md-4 col-form-label text-md-end">hobbies</label>
                    <input type="text" name="hobbies" required>
                    </div>
                    </div>

                   
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                            <input id="password" type="password" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                            <span style="color: red;">@error('password'){{$message}}@enderror </span>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end"> Confirm Password </label>
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                        <span style="color: red;">@error('password_confirmation'){{$message}}@enderror </span>
                        </div>
                    </div>
                        <div class="row mb-0">
                            <div style="margin-left:20%">
                                <button type="submit" class="btn btn-primary">SUBMIT
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
