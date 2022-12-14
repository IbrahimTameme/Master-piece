

@extends('layouts.app')


@push('scripts')


<script src="{{'./js/card.js'}}"></script>
    
@endpush

@section('content')





    <!-- slider section -->

    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Welcome to <br />
                           Football Tournemt
                          </h1>
                          <p>
                            There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or
                            randomised words which don't look even slightly
                            believable.
                          </p>
                          <div class="d-flex">
                            <a href="" class="text-uppercase custom_orange-btn mr-3">
                              Sign Now
                            </a>
                            <a href="" class="text-uppercase custom_dark-btn">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="https://cdn.vanguardngr.com/wp-content/uploads/2021/07/image-21.png" alt="" class="img_slider" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @foreach($view1 as $data)
          <div class="carousel-item ">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                         {{$data->sliders_name}}
                          </h1>
                          <p>{{$data->sliders_desc}}
                          </p>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="../images/{{$data->sliders_img}}" alt="" class="img_slider" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
         
        </div>
      </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
<!-- service section -->

<section class="service_section layout_padding ">
  <div class="container">
    <h2 class="custom_heading">Our Services</h2>
    <p class="custom_heading-text">
      There are many variations of passages of Lorem Ipsum available, but
      the majority have
    </p>
    <div class=" layout_padding2">
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="https://cdn-icons-png.flaticon.com/128/3069/3069052.png" alt="Card image cap" />
          <div class="card-body">
            <h5 class="card-title">Create Tournament</h5>
            <p class="card-text">
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form, by injected humour, or randomised words which don't look
              even slightly believable.
            </p>
            <div>
              <a href="add_tournament" class="custom_dark-btn">
                Create 
              </a>
            </div>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://static.thenounproject.com/png/1088365-200.png" alt="Card image cap" />
          <div class="card-body">
            <h5 class="card-title">Join Tournament</h5>
            <p class="card-text">
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form, by injected humour, or randomised words which don't look
              even slightly believable.
            </p>
            <div>
              <a href="/tournaments" class="custom_dark-btn">
                Join
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="" class="custom_dark-btn readmore_btn">
        Read More
      </a>
    </div>
  </div>
</section>

<!-- end service section -->



    <!-- cart section -->
    <div class="container mt-5 " >
      <h2 class="custom_heading">FEATURED TOURNAMENTS</h2>
      <p class="custom_heading-text">
       Hand picked of the best upcoming tournaments
      </p>
    <div class="cards-wrapper row">
      <div class="row d-flex align-items-center justify-content-center">
      @foreach($view2 as $data) 
      
      <div class="card-wrapper col-3 m-4 ">
        <div class="card-1 card-object card-object-hf  " style="background: #222  url(../images/{{$data->category_image}}) 90% 35% no-repeat; "><a class="face front" href="tournaments/{{$data->category_id}}">
            <div class="title-wrapper">
              
                <div class="title">{{$data->category_name}}</div>
                 </div>
               
                
                  </div>              
               
            </div></a>
      @endforeach
      </div>
    </div>
  </div>



 <!-- cart end section -->
  <!-- fruits section -->

  <section class="fruit_section mt-5">
    <div class="container mt-5">
      <h2 class="custom_heading">Ultimate Expierence</h2>
      <p class="custom_heading-text">
        There are many variations of passages of Lorem Ipsum available, but
        the majority have
      </p>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <h3>
              Real Tournament Expierence
            </h3>
            <p class="mt-4 mb-5">
              but the majority have suffered alteration in some form, by
              injected humour, or randomised words which don't look even
              slightly believable. If you are going to use a passage of Lorem
              Ipsum, you need to be
            </p>
           
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="https://img.icons8.com/external-konkapp-outline-color-konkapp/512/000000/external-tournament-soccer-konkapp-outline-color-konkapp.png" alt="" class="exp_img" width="250px" />
          </div>
        </div>
      </div>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <h3>
              Expert Planning
            </h3>
            <p class="mt-4 mb-5">
              but the majority have suffered alteration in some form, by
              injected humour, or randomised words which don't look even
              slightly believable. If you are going to use a passage of Lorem
              Ipsum, you need to be
            </p>
            
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center ">
            <img src="https://cdn-icons-png.flaticon.com/512/4285/4285555.png" alt="" class="exp_img" width="100px" />
          </div>
        </div>
      </div>
      <div class="row layout_padding2-top layout_padding-bottom">
        <div class="col-md-8">
          <div class="fruit_detail-box ">
            <h3>
              Preparing Every Need
            </h3>
            <p class="mt-4 mb-5">
              but the majority have suffered alteration in some form, by
              injected humour, or randomised words which don't look even
              slightly believable. If you are going to use a passage of Lorem
              Ipsum, you need to be
            </p>
           
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="https://img.icons8.com/external-filled-outline-geotatah/512/000000/external-arrange-emergency-and-disaster-management-color-filled-outline-geotatah.png" alt="" class="exp_img" width="250px" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end fruits section -->

  <!-- tasty section -->
  <section class="tasty_section">
    <div class="container_fluid">
      <h2>
       Compete Until You Win
      </h2>
    </div>
  </section>
 
  <!-- end tasty section -->

  
  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <h2 class="custom_heading">Testimonial</h2>
      <p class="custom_heading-text">
        There are many variations of passages of Lorem Ipsum available, but
        the majority have
      </p>
      <div>
        <div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
           
@isset($view3)
@foreach ($view3 as $data)
@if ($data->id == 1)
<div class="carousel-item active">
  <div class="client_container layout_padding2">
    <div class="client_img-box">
      <img src="https://img.icons8.com/external-flat-andi-nur-abdillah/512/000000/external-Player-football-(flat)-flat-andi-nur-abdillah.png" alt="" />
    </div>
    <div class="client_detail">
      <h3>
        {{$data->name}}
      </h3>
      <p class="custom_heading-text">
        {{$data->message}}
      </p>
    </div>
  </div>
</div>        

    
@else
    


<div class="carousel-item ">
  <div class="client_container layout_padding2">
    <div class="client_img-box">
      <img src="https://img.icons8.com/external-flat-andi-nur-abdillah/512/000000/external-Player-football-(flat)-flat-andi-nur-abdillah.png" alt="" />
    </div>
    <div class="client_detail">
      <h3>
        {{$data->name}}
      </h3>
      <p class="custom_heading-text">
        {{$data->message}}
      </p>
    </div>
  </div>
</div>
@endif
    
@endforeach
    
@endisset

          </div>
          <div class="custom_carousel-control">
            <a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-slide="prev">
              <span class="" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-slide="next">
              <span class="" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>
 

  <!-- end client section -->

  <!-- contact section -->

 

  <section class="contact_section layout_padding">
    <div class="container">
       
@if((session('done') != null))
<div class="alert alert-success" role="alert">
  {{ session('done') }}
</div>
@endif
      <h2 class="font-weight-bold">
        Contact Us
      </h2>
      <div class="row">
        <div class="col-md-8 mr-auto">
          <form action="{{route('contact')}}" method="POST">
            @csrf
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" id="name" name="name" placeholder="Name">
                </div>
                <div>
                  <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number">
                </div>
                <div>
                  <input type="email" id="email" name="email" placeholder="Email">
                </div>

                <div class="mt-5">
                  <input type="text" id="message" name="message" placeholder="Message">
                </div>
                <div class="mt-5">
                  <button type="submit">
                    send
                  </button>
                </div>
              </div>

            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- map section -->
  <section class="map_section">
    <div id="map" class="h-100 w-100 ">
    </div>
  </section>

  <!-- end map section -->




  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 29.532310495606417, 
          lng: 35.00438926053889
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 29.532310495606417, 
          lng: 35.00438926053889
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
