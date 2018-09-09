<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toppowa</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{URL::asset('Temp/css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('Temp/css/style.css')}}">

    <!-- Responsive stylesheet  -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('Temp/css/responsive.css')}}">

    <!-- Favicon -->
    <link href="img/logo.jpg" rel="shortcut icon" type="image/png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
                
                .rotate-image{
                    -webkit-transform: rotate(90deg);
                    -moz-transform: rotate(90deg);
                    -o-transform: rotate(90deg);
                    -ms-transform: rotate(90deg);
                    transform: rotate(90deg);
                }

                .jstfy {
                    text-align: left;
                
                }


    </style>

</head>
 
<body>

    <div class="preloader"></div>

    <!-- Header navbar start -->
    <div class="header-topbar style-2">
        <div class="container padding-none">
            <div class="row">
                <div class="col-md-8 col-sm-6 welcome-top">
                    <ul class="list-inline top-icon">
                        <li><i class="fa fa-envelope"></i> info@toppowa.com</li>
                        <li><i class="fa fa-clock-o"></i> +256(0)705363512</li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6">
                    <ul class="list-inline text-right icon-style-1">
                        <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <!-- <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar conner-style style-2 position-fixed">
        <div class="container padding-none">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">


                            <a href="/"><img src="Temp/img/logo.jpg" alt="" style="height: 90px; width: 130px;">
                            </a>

                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                            <!-- <a href="index-2.html"><img src="img/logo.jpg" alt="" style="height: 70px; width: 130px;">
                                </a> -->
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations-delay="1.8s" data-animations="fadeInUp">
                            <ul class="nav navbar-nav bg-none navbar-right style-3">
                                <li>
                                    <a href="/"><span data-hover="Home">Home</i></span> </a>
                                </li>
                                <li>
                                    <a href="/problem"><span data-hover="Home">Problem</i></span> </a>
                                </li>
                                <li>
                                    <a href="/solution"><span data-hover="Home">Solution</i></span> </a>
                                </li>
                                <li>
                                    <a href="#"><span data-hover="Home">Service</i></span> </a>
                                </li>
                                <li>
                                    <a href="/team"><span data-hover="Home">Our Team</i></span> </a>
                                </li>
                                <li>
                                    <a href="#contact"><span data-hover="Home">Contact</i></span> </a>
                                </li>
 
                      
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header navbar end -->

    @yield('content')


    <!-- Footer Style start -->
    <footer class="bg-faded" id="contact">
        <div class="container">
            <div class="section-content">
                <div class="row margin-top-30">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <div class="footer-item footer-widget-one">
                          <img alt="" src="img/logo.jpg" class="footer-logo">
                        <!--   <p>Voluptate porro esse repellat quo exercitationem debitis incidunt.</p> -->

                          <ul class="address">
                            <li><i class="pe-7s-call"></i>Phone:  +256(0)705363512</li>
                            <li><i class="pe-7s-mail"></i><a href="mailto:">Email: info@toppowa.com</a></li>
                            <li><i class="pe-7s-mail"></i><a href="mailto:">Location: Nakasero, Rwenzori Towers</a></li>
                          </ul>
                          
                          <hr>
                          <ul class="social-icon bg-theme">
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <!--  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <!--  <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li> -->
                          </ul>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                
                   
                   
                </div>
            </div>
        </div>
    </footer>

    <section class="footer-copy-right bg-f9">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p>© 2018, All Rights Reserved Toppowa</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer Style End -->

  
    <a href="#" class="scrollup"><i class="pe-7s-up-arrow" aria-hidden="true"></i></a>
    <!-- jQuery -->
    <script type="text/javascript" src="{{URL::asset('Temp/js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{URL::asset('Temp/js/bootstrap.min.js')}}"></script>

    <!-- all plugins and JavaScript -->
    <script type="text/javascript" src="{{URL::asset('Temp/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('Temp/js/css3-animate-it.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('Temp/js/bootstrap-dropdownhover.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('Temp/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('Temp/js/gallery.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('Temp/js/player.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('Temp/js/retina.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('Temp/js/comming-soon.js')}}"></script>

    <!-- Main Custom JS -->
    <script type="text/javascript" src="{{URL::asset('Temp/js/script.js')}}"></script>


</body>

</html>

