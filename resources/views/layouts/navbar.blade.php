<script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="{{asset('/images/masterpiece_logo-removebg-preview.png')}}" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/tournaments"> Tournaments</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="/profile_page"> user </a>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="/contact">Contact us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/news">News</a>
                </li>
              </ul>

            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="/add_tournament">
                ADD Tournaments
              </a>
            </div>
            
          </div>
            <!-- Right Side Of Navbar -->

            <ul class="navbar-nav ms-auto">
              <!-- Authentication Links -->
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account </a>
                <div class="dropdown-menu rounded-0 border-0 m-0">
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"> </i> {{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> {{ __('Signup') }} </a>
                    </li>
                @endif
            @else



                    <a href="/profile_page" class="dropdown-item"><i class="fa-solid fa-user">  </i> {{ Auth::user()->name }} </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i class="fa-solid fa-arrow-right-from-bracket"> </i>{{ __('Logout') }}

                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
           
            
   

    
  </div> 
</ul>
</nav>
</div>
</header>
  </div>@endif


    <script type="text/javascript" src="{{'/js/jquery-3.4.1.min.js'}}"></script>
<script type="text/javascript" src="{{'/js/bootstrap2.js'}}"></script>

<script src="{{'./js/card.js'}}"></script>
    <!-- end header section -->