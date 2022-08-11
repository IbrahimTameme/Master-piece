@extends('layouts.app')


@push('scripts')
<script type="text/javascript" src="{{'js/jquery-3.4.1.min.js'}}"></script>
<script type="text/javascript" src="{{'js/bootstrap2.js'}}"></script>

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
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Basketball  <br />
                            matchs
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
                          <img src="https://cdn2.vectorstock.com/i/1000x1000/94/86/basketball-tournament-vector-1979486.jpg" alt="" class="img_slider" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Welcome to <br />
                            The Grand Tournemt
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
                          <img src="https://iq-study.com/wp-content/uploads/2021/04/tournaments.jpg" alt="" class="img_slider" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                <a href="" class="custom_dark-btn">
                  Buy Now
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
                <a href="" class="custom_dark-btn">
                  Buy Now
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
    
    <div class="cards-wrapper">
      <div class="card-wrapper">
          <div class="card-1 card-object card-object-hf"><a class="face front" href="#">
                  <div class="title-wrapper">
                      <div class="title">Jenny</div>
                      <div class="subtitle">felis hairyus</div>
                  </div>
              </a><a class="face back" href="#">
                  <div class="img-wrapper">
                      <div class="avatar"></div>
                  </div>
                  <div class="info-wrapper">
                      <div class="info-title">Jenny</div>
                      <ul class="info-content">
                          <li class="info-content-item">Age <span>6 years</span></li>
                          <li class="info-content-item">Length <span>46cm</span></li>
                          <li class="info-content-item">Weight <span>4kg</span></li>
                      </ul>
                  </div>
              </a></div>
      </div>
      <div class="card-wrapper">
          <div class="card-2 card-object card-object-hf"><a class="face front" href="#">
                  <div class="title-wrapper">
                      <div class="title">Mishka</div>
                      <div class="subtitle">felis catus</div>
                  </div>
              </a><a class="face back" href="#">
                  <div class="img-wrapper">
                      <div class="avatar"></div>
                  </div>
                  <div class="info-wrapper">
                      <div class="info-title">Mishka</div>
                      <ul class="info-content">
                          <li class="info-content-item">Age <span>7 years</span></li>
                          <li class="info-content-item">Length <span>42cm</span></li>
                          <li class="info-content-item">Weight <span>3.8kg</span></li>
                      </ul>
                  </div>
              </a></div>
      </div>
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
            </a></div>
    </div>
    </div>



<!-- cart end section -->
  <!-- fruits section -->

  <section class="fruit_section">
    <div class="container">
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
            <img src="https://cdn-icons.flaticon.com/png/512/3083/premium/3083603.png?token=exp=1655916227~hmac=53fb972e743b4e0c3d742346006296f8" alt="" class="exp_img" width="250px" />
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
            <img src="https://cdn-icons.flaticon.com/png/512/5293/premium/5293634.png?token=exp=1655916588~hmac=e147886260c93e1aa90f7dc4e85f8cc6" alt="" class="exp_img" width="250px" />
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
            <div class="carousel-item active">
              <div class="client_container layout_padding2">
                <div class="client_img-box">
                  <img src="images/client.png" alt="" />
                </div>
                <div class="client_detail">
                  <h3>
                    Johnhex
                  </h3>
                  <p class="custom_heading-text">
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in
                    some form, by injected humour, or randomised words which
                    don't look even slightly believable. If you are <br />
                    going to use a passage of Lorem Ipsum, you need to be sure
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="client_container layout_padding2">
                <div class="client_img-box">
                  <img src="images/client.png" alt="" />
                </div>
                <div class="client_detail">
                  <h3>
                    Johnhex
                  </h3>
                  <p class="custom_heading-text">
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in
                    some form, by injected humour, or randomised words which
                    don't look even slightly believable. If you are <br />
                    going to use a passage of Lorem Ipsum, you need to be sure
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="client_container layout_padding2">
                <div class="client_img-box">
                  <img src="images/client.png" alt="" />
                </div>
                <div class="client_detail">
                  <h3>
                    Johnhex
                  </h3>
                  <p class="custom_heading-text">
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in
                    some form, by injected humour, or randomised words which
                    don't look even slightly believable. If you are <br />
                    going to use a passage of Lorem Ipsum, you need to be sure
                  </p>
                </div>
              </div>
            </div>
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
