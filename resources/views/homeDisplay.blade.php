@extends('home')

@section('content')

    <!-- Start  bootstrap-touch-slider Slider -->
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- Third Slide -->
            <div class="item active">

                <!-- Slide Background -->
                <img src="{{URL::asset('Temp/img/1.jpg')}}" alt="Slider Images"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>

                <div class="slide-text slide_style_left">
                            <h1 data-animation="animated fadeInRight">Simplifying <span class="color-defult"> Health Care </span></h1>
                            <p data-animation="animated fadeInLeft" style="font-size: 20px;">
                               Toppowa is a Health Finance startup that provides<br> access to instant loans through income earners to <br>self pay for medical and health care bills
                                <br>
                            </p>
                           <!--  <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Read more</a>
                            <a href="#" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">Book Now</a> -->
                        </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">
            
                <!-- Slide Background -->
                <img src="{{URL::asset('Temp/img/2.jpeg')}}" alt="Slider Images" class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <h1 data-animation="animated bounceInDown">Solution in<span class="color-defult">&nbspMoney Emergency</span></h1>
                    <p data-animation="animated lightSpeedIn">
                        Toppowa is a special health care loan suitable and versatile for all those who are in need to settle health care needs. Emergency can happen anytime and any where with anyone whenever it wants
                    </p>
                    <!-- <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">Read More</a>
                    <a href="#" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">Donate Now</a> -->
                </div>
            </div>
            <!-- End of Slide -->
            
            <!-- Third Slide -->
            <div class="item">
            
                <!-- Slide Background -->
                <img src="{{URL::asset('Temp/img/bg/family.jpg')}}" alt="Slider Images"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_right">
                    <h1 data-animation="animated fadeInLeft">Good Health and&nbsp<span class="color-defult">Well being</span></h1>
                    <p data-animation="animated fadeInRight" style="text-align: center;">
                        Toppowa covers health medical bills to enable low income earners and their families have access to quality health care services from private medical facilities saving them long queues in public facilities hence quick return on job, reducing poverty levels in households
                    </p>
                    <!-- <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Read More</a>
                    <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">Donate Now</a> -->
                </div>
            </div>
            <!-- End of Slide -->


        </div><!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div> <!-- End  bootstrap-touch-slider Slider -->


@endsection