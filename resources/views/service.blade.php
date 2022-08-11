@extends('layouts.app')



@push('scripts')
<script type="text/javascript" src="{{'js/jquery-3.4.1.min.js'}}"></script>
<script type="text/javascript" src="{{'js/bootstrap2.js'}}"></script>

<script src="{{'./js/card.js'}}"></script>
    
@endpush




@section('content')
<div class="hero_area sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/masterpiece_logo-removebg-preview.png" alt="" />
            
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.html"> Fruits</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="">
                Get A quote
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  </div>
  <div class="container " >
    <div class="filter_items">
    <div class="row" >
      <div class="col"><input type="checkbox" name="item1" id="item1"> <label for="item1">item1</label></div>
      <div class="col"><input type="checkbox" name="item2" id="item2"> <label for="item2">item2</label></div>
      <div class="col"><input type="checkbox" name="item3" id="item3"> <label for="item3">item3</label></div>
      <div class="col"><input type="checkbox" name="item4" id="item4"> <label for="item4">item4</label></div>
           
    </div>
    <div class="row" >
      <div class="col"><input type="checkbox" name="item5" id="item5"> <label for="item5">item5</label></div>
      <div class="col"><input type="checkbox" name="item6" id="item6"> <label for="item6">item6</label></div>
      <div class="col"><input type="checkbox" name="item7" id="item7"> <label for="item7">item7</label></div>
      <div class="col"><input type="checkbox" name="item8" id="item8"> <label for="item8">item8</label></div>
           
    </div>
    <div class="row" >
      <div class="col"><input type="checkbox" name="item9" id="item9"> <label for="item9">item9</label></div>
      <div class="col"><input type="checkbox" name="item10" id="item10"> <label for="item10">item10</label></div>
      <div class="col"><input type="checkbox" name="item11" id="item11"> <label for="item11">item11</label></div>
      <div class="col"><input type="checkbox" name="item12" id="item12"> <label for="item12">item12</label></div>
           
    </div>
    </div>
  </div>
  <div class="container ">
    <!-- service section -->
    <div class="row items_box ">
    <div class="card-wrapper">
      <div class="card-3 card-object card-object-hf"><a class="face front" href="#">
          <div class="title-wrapper">
            <div class="title">Football</div>
            <div class="subtitle">15/7/2022 - 20/5/2022</div>
          </div>
        </a><a class="face back" href="#">
          <div class="img-wrapper">
            <div class="avatar"></div>
          </div>
          <div class="info-wrapper">
            <div class="info-title">Kyra</div>
            <ul class="info-content">
              <li class="info-content-item">Sport <span>Football</span></li>
              <li class="info-content-item">Length <span>15/7/2022 - 20/5/2022</span></li>
              <li class="info-content-item">Size <span>8 Teams</span></li>
            </ul>
          </div>
        </a>
      </div>
    </div>
  
  <div class="card-wrapper">
    <div class="card-3 card-object card-object-hf"><a class="face front" href="#">
        <div class="title-wrapper">
          <div class="title">Kyra</div>
          <div class="subtitle">felix pumus</div>
        </div>
      </a><a class="face back" href="#">
        <div class="img-wrapper">
          <div class="avatar"></div>
        </div>
        <div class="info-wrapper">
          <div class="info-title">Kyra</div>
          <ul class="info-content">
            <li class="info-content-item">Age <span>5 years</span></li>
            <li class="info-content-item">Length <span>50cm</span></li>
            <li class="info-content-item">Weight <span>5.2kg</span></li>
          </ul>
        </div>
      </a></div>
  </div>
  
  <div class="card-wrapper">
    <div class="card-3 card-object card-object-hf"><a class="face front" href="#">
        <div class="title-wrapper">
          <div class="title">Kyra</div>
          <div class="subtitle">felix pumus</div>
        </div>
      </a><a class="face back" href="#">
        <div class="img-wrapper">
          <div class="avatar"></div>
        </div>
        <div class="info-wrapper">
          <div class="info-title">Kyra</div>
          <ul class="info-content">
            <li class="info-content-item">Age <span>5 years</span></li>
            <li class="info-content-item">Length <span>50cm</span></li>
            <li class="info-content-item">Weight <span>5.2kg</span></li>
          </ul>
        </div>
      </a></div>
  </div>
</div>

<div class="row items_box ">
  <div class="card-wrapper">
    <div class="card-3 card-object card-object-hf"><a class="face front" href="#">
        <div class="title-wrapper">
          <div class="title">Football</div>
          <div class="subtitle">15/7/2022 - 20/5/2022</div>
        </div>
      </a><a class="face back" href="#">
        <div class="img-wrapper">
          <div class="avatar"></div>
        </div>
        <div class="info-wrapper">
          <div class="info-title">Kyra</div>
          <ul class="info-content">
            <li class="info-content-item">Sport <span>Football</span></li>
            <li class="info-content-item">Length <span>15/7/2022 - 20/5/2022</span></li>
            <li class="info-content-item">Size <span>8 Teams</span></li>
          </ul>
        </div>
      </a>
    </div>
  </div>

<div class="card-wrapper">
  <div class="card-3 card-object card-object-hf"><a class="face front" href="#">
      <div class="title-wrapper">
        <div class="title">Kyra</div>
        <div class="subtitle">felix pumus</div>
      </div>
    </a><a class="face back" href="#">
      <div class="img-wrapper">
        <div class="avatar"></div>
      </div>
      <div class="info-wrapper">
        <div class="info-title">Kyra</div>
        <ul class="info-content">
          <li class="info-content-item">Age <span>5 years</span></li>
          <li class="info-content-item">Length <span>50cm</span></li>
          <li class="info-content-item">Weight <span>5.2kg</span></li>
        </ul>
      </div>
    </a></div>
</div>

<div class="card-wrapper">
  <div class="card-3 card-object card-object-hf"><a class="face front" href="#">
      <div class="title-wrapper">
        <div class="title">Kyra</div>
        <div class="subtitle">felix pumus</div>
      </div>
    </a><a class="face back" href="#">
      <div class="img-wrapper">
        <div class="avatar"></div>
      </div>
      <div class="info-wrapper">
        <div class="info-title">Kyra</div>
        <ul class="info-content">
          <li class="info-content-item">Age <span>5 years</span></li>
          <li class="info-content-item">Length <span>50cm</span></li>
          <li class="info-content-item">Weight <span>5.2kg</span></li>
        </ul>
      </div>
    </a></div>
</div>
</div>
<div class="row items_box ">
  <div class="card-wrapper">
    <div class="card-3 card-object card-object-hf"><a class="face front" href="#">
        <div class="title-wrapper">
          <div class="title">Football</div>
          <div class="subtitle">15/7/2022 - 20/5/2022</div>
        </div>
      </a><a class="face back" href="#">
        <div class="img-wrapper">
          <div class="avatar"></div>
        </div>
        <div class="info-wrapper">
          <div class="info-title">Kyra</div>
          <ul class="info-content">
            <li class="info-content-item">Sport <span>Football</span></li>
            <li class="info-content-item">Length <span>15/7/2022 - 20/5/2022</span></li>
            <li class="info-content-item">Size <span>8 Teams</span></li>
          </ul>
        </div>
      </a>
    </div>
  </div>

<div class="card-wrapper">
  <div class="card-3 card-object card-object-hf"><a class="face front" href="#">
      <div class="title-wrapper">
        <div class="title">Kyra</div>
        <div class="subtitle">felix pumus</div>
      </div>
    </a><a class="face back" href="#">
      <div class="img-wrapper">
        <div class="avatar"></div>
      </div>
      <div class="info-wrapper">
        <div class="info-title">Kyra</div>
        <ul class="info-content">
          <li class="info-content-item">Age <span>5 years</span></li>
          <li class="info-content-item">Length <span>50cm</span></li>
          <li class="info-content-item">Weight <span>5.2kg</span></li>
        </ul>
      </div>
    </a></div>
</div>

<div class="card-wrapper">
  <div class="card-3 card-object card-object-hf"><a class="face front" href="#">
      <div class="title-wrapper">
        <div class="title">Kyra</div>
        <div class="subtitle">felix pumus</div>
      </div>
    </a><a class="face back" href="#">
      <div class="img-wrapper">
        <div class="avatar"></div>
      </div>
      <div class="info-wrapper">
        <div class="info-title">Kyra</div>
        <ul class="info-content">
          <li class="info-content-item">Age <span>5 years</span></li>
          <li class="info-content-item">Length <span>50cm</span></li>
          <li class="info-content-item">Weight <span>5.2kg</span></li>
        </ul>
      </div>
    </a></div>
</div>
</div>


 
  

  </div>
  

  <!-- end service section -->
<div class="container">
  <div class="row testomny_img">
  </div>
</div>



  <!-- footer section -->

  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
    
@endsection