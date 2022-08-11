<section class="vh-100">


  <div class="container h-100">

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-11">
        <div class="card" style="border:none" >
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-lg-2float-left" >
                <img
                  src="https://midoshriks-school.netlify.app/assets/sing/imgs/login-form-img.png"
                  class="img-fluid"
                  alt="Sample image"
                  style="height: 419px"
                />
              </div>
              {{-- name --}}
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1" style="borderLeft:1px solid #363062">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 " style="color:#7A4495">
                  Sign up
                </p>
                <form class="mx-1 mx-md-4" method="POST" action="{{ route('register') }}" >
                  @csrf
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw" style="color:#7A86B6">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" htmlFor="name" style="color:#937DC2">
                        Your Name
                      </label>
                      <input
                        type="text"
                        id="name"
                        class="form-control"
                        @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" 
                      />
                      @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                    </div>
                  </div>
{{-- email --}}
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw" style="color:#7A86B6">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" htmlFor="email" style="color:#937DC2">
                        Your Email
                      </label>
                      <input
                        type="email"
                        id="email"
                        class="form-control"
                        @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email"
                      />
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                  </div>

{{-- image --}}
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw" style="color:#7A86B6">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" htmlFor="image" style="color:#937DC2">
                      Image
                      </label>
                      <input
                        type="file"
                        id="image"
                        class="form-control"
                        @error('image') is-invalid @enderror name="image" value="{{ old('image') }}" required autocomplete="number"
                      />
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    </div>
                  </div>

{{-- password --}}
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw" style="color:#7A86B6">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" htmlFor="password" style="color:#937DC2">
                        Password
                      </label>
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        @error('password') is-invalid @enderror name="password" required autocomplete="new-password"
                      />
                      <span>{error.passError}</span>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw" style="color:#7A86B6">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" htmlFor="number" style="color:#937DC2">
                        Number 
                      </label>
                      <input
                        type="text"
                        id="number"
                        class="form-control"
                        @error('number') is-invalid @enderror name="number" value="{{ old('number') }}" required autocomplete="number"
                      />
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    </div>
                  </div>



{{-- age --}}
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw" style="color:#7A86B6">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" htmlFor="age" style="color:#937DC2">
                       age
                      </label>
                      <input
                        type="text"
                        id="age"
                        class="form-control"
                        @error('age') is-invalid @enderror name="age" value="{{ old('age') }}" required autocomplete="number"
                      />
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    </div>
                  </div>

{{--  location --}}
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw" style="color:#7A86B6">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" htmlFor="location" style="color:#937DC2">
                        location
                      </label>
                      <input
                        type="text"
                        id="location"
                        class="form-control"
                        @error('location') is-invalid @enderror name="location" value="{{ old('location') }}" required autocomplete="number"
                      />
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    </div>
                  </div>


{{-- hobbies --}}
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw" style="color:#7A86B6">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" htmlFor="hobbies" style="color:#937DC2">
                        hobbies
                      </label>
                      <input
                        type="text"
                        id="hobbies"
                        class="form-control"
                        @error('hobbies') is-invalid @enderror name="hobbies" value="{{ old('hobbies') }}" required autocomplete="number"
                      />
                    
                    </div>
                  </div>

{{-- skills --}}

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw" style="color:#7A86B6">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" htmlFor="skills" style="color:#937DC2">
                        skills
                      </label>
                      <input
                        type="text"
                        id="skills"
                        class="form-control"
                        @error('skills') is-invalid @enderror name="skills" value="{{ old('skills') }}" required autocomplete="number"
                      />
                    
                    </div>
                  </div>



                 {{-- <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      defaultValue=""
                      id="form2Example3c"
                    />

                    <label class="form-check-label" htmlFor="form2Example3">
                      I agree all statements in{" "}
                      <a href="#!">Terms of service</a>
                    </label>
                  </div>  --}}

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  
            <input type="submit"  defaultValue="Sign up" disabled/>
            <input type="submit"  defaultValue="Sign up" value="Submit" style="color:#192294,borderColor:#192294,borderRadius:10px"/>
            
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>