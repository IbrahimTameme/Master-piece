@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input id="name" type="text"  @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">First Name</label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input  class="form-control form-control-lg" id="email" type="email"  @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" />
                    <label for="birthdayDate" class="form-label">E-mail</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>

                </div>
               

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input id="password" type="password"  @error('password') is-invalid @enderror name="password" required autocomplete="new-password" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Password</label>
                    
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
    
                      <div class="form-outline">
                        <input id="number" type="text"  @error('number') is-invalid @enderror name="number" value="{{ old('number') }}" required autocomplete="number" class="form-control form-control-lg" />
                        <label class="form-label" for="number">phone Number </label>
                        @error('number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
    
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input id="age" type="number"  @error('age') is-invalid @enderror name="age" value="{{ old('age') }}" required autocomplete="age" class="form-control form-control-lg" />
                          <label class="form-label" for="age">Age </label>
                          @error('age')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
      
                      </div>

        
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
