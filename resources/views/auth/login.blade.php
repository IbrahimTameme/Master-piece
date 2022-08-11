
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />


</head>
<body>
    




<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img
            src="https://cdn.discordapp.com/attachments/944998982449528843/1001493263649345606/Login-amico.png"
            class="img-fluid"
            alt="Sample image"
            style="height: 600px , borderRight:2px solide #80558C"
          />
  
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 " style="borderLeft:1px solid #363062">
          <form method="POST" action="{{ route('login') }}">
           @csrf
            <div class="divider d-flex align-items-center my-4 ">
              <h1 class="text-center fw-bold mx-3 mb-0" style="color:#7A4495">Login</h1>
            </div>
             {{-- Email input  --}}
            <div class="form-outline mb-4">
            <label class="form-label" htmlFor="email"   style="color:#937DC2">
                Email address
              </label>
              <input
                type="email"
                 id="email"
                 @error('email') is-invalid @enderror
                class="form-control form-control-lg"
                name="email" value="{{ old('email') }}"
                placeholder="Enter a valid email address"
                value="{{ old('email') }}" required autocomplete="email" 
              >
            
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        
             {{-- Password input  --}}
            <div class="form-outline mb-3">
            <label class="form-label" htmlFor="password"  style="color:#937DC2">
                Password
              </label>
              <input
                type="password"
                id="password"
                class="form-control form-control-lg"
                placeholder="Enter password"
                @error('password') is-invalid @enderror name="password" required autocomplete="current-password"
              > 
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <div class="d-flex justify-content-between align-items-center">
  
              {{--  Checkbox  --}}
              <div class="form-check mb-0">
                <input
                  class="form-check-input me-2"
                  type="checkbox"
                  defaultValue=""
                  id="form2Example3"
                />
  
                <label class="form-check-label" htmlFor="form2Example3" style="color:#7A86B6">
                  Remember me
                </label>
              </div>
             
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <input
              defaultValue="Login"
                type="submit"
                class="btn btn-lg"
                style=' paddingLeft: 2.5rem, paddingRight: 2.5rem, color:#7A4495, border: 2px solid #7A4495 '
              />
              
              <p class="small fw-bold mt-2 pt-1 mb-0" style="color:#7A4495">
                <a href="/register" class="link " style="color:#7A86B6">
                  Register
                </a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>

</body>
</html>









    {{-- <div class="container login_form">
  
  <form method="POST" action="{{ route('login') }}">
    <h2>login now</h2>
    @csrf
    <div>
    <input type="email" id="email" class="email" placeholder="email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>

@enderror
</div>
    <br/>
    <div>
    <input type="password" id="password"class="pwd" placeholder="password"  @error('password') is-invalid @enderror name="password" required autocomplete="current-password">
    
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<button type="submit" class="signin">
    <span> {{ __('Login') }} </span>
   
  </button>
  <a href="#" class="link">
    Don't have an account ?
  </a>


  </form>
  
  <br/>
  
  
  <h3>your registration is complete !    </h3>
  <h3>your sign in is complete !</h3>
  <div class="reg"></div>
  <div class="sig"></div>

 
</div> --}}