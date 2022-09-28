
@extends('layouts.app')


@section('css')

<link  href="{{ asset ('/css/form/form.css')}}" rel="stylesheet">

@endsection

@section('content')




<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
 


    <!-- Navbar Start -->
    

    <!-- Navbar End -->



    <!-- Contact Start -->
    <div class="container-fluid mt-5  ">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class=" pr-3">Contact Us</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                       
@if((session('done') != null))
<div class="alert alert-success" role="alert">
  {{ session('done') }}
</div>
@endif
 
                <div class="contact-form bg-light p-30 p-3">
                    <div id="success"></div>
                    <form action="{{route('contact2')}}" method="POST">
                        @csrf 
                        <div class="control-group">
                            <input type="text" class="form-control" id="name"  name="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email " name="email"  placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="phone_number"
                                required="required" data-validation-required-message="Please enter a phone number" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" name="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn quote_btn-container py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5 ">
                <div class="bg-light p-30 mb-30 p-3">
                    <div class="bg-light p-30 mb-30">

                        <iframe style="width: 100%; height: 250px;" id="gmap_canvas" src="https://maps.google.com/maps?q=jordan%20aqaba&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><a href="https://www.whatismyip-address.com/" ></a>

                    </div>
                </div>
                <div class="bg-light p-30 mb-3 p-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>332 Street, AQABA, JORDAN</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>L3EEB@Gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+962 77 809 0526</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




    


    <!-- JavaScript Libraries -->
   
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>



@endsection
