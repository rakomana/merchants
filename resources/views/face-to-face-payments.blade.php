@extends('layouts.app')

@section('content')


 
<div class="home-section2">


        <div class="container">

        <div class="row">

<!--begin col-md-6 -->

<div class="col-md-6">

        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 text-center">
                            <h2 class="smile-white" style="color:#e1dae5; text-align:center;"><strong>It's time to take <br>safe and easy payments.</strong></h2>
                                                    <a class="btn btn-outline-white mt-1" href="{{url('quote')}}" id="pulloutBannerCta">Get a free quote</a>
            </div>
        </div>
        <br><br>
    </div>
</div>
</div>
</div>
</div>


<!--end col-md-6 -->

<div class="module v2-new-or-switching-module overflow-hidden in-viewport">
        <div class="container">
        <h1 style="text-align:center;">Choose from a range of machines</h1>
        <link rel="stylesheet" type="text/css" href="css\additional\tp.min78ce.css">
            <div class=" card-deck justify-content-around">
                         
            <div class=" card-deck justify-content-around">
                        <div class="card border-0">
                            <a href="#">

                                    <picture>
                                        <source srcset="images/mobile-payments-blog_699x375.jpeg" type="image/webp">
                                        <img src="images/mobile-payments-blog_699x375.jpeg" class="card-img-top lazy">
                                    </picture>                            </a>
                            <div class="card-body">
                                <h3>Counter top</h3>
                                <p><strong>Ideal for taking payments at a till.</strong></p>

                                 <p>Compare design</p>

                                <p>Connected by phone or broadband</p>

                                <p>Quick receipting</p><br>
                                <a href="{{url('contact')}}" class="btn p-2 btn-outline-orange">
                                    Find out more
                                </a>
                            </div>
                        </div>
                        <div class="card border-0">
                            <a href="#/">

                                    <picture>
                                        <source srcset="images/cardprocesing.jpg" type="image/webp">
                                        <img src="images/cardprocesing.jpg" class="card-img-top lazy">
                                    </picture>                            </a>
                            <div class="card-body">
                                <h3>Portable</h3>
                                <p><strong>Perfect for taking to your customers.</strong></p>

                                <p>Small & lightweight</p>

                                <p>50m range via Wi-Fi or Bluetooth</p>

                                <p>Long lasting battery</p><br>
                                <a href="{{url('contact')}}" class="btn p-2 btn-outline-orange">
                                    Find out more
                                </a>
                            </div>
                        </div>
                        <div class="card border-0">
                            <a href="#">

                                    <picture>
                                        <source srcset="images/Mobile-Payment.jpg" type="image/webp">
                                        <img src="images/Mobile-Payment.jpg" class="card-img-top lazy">
                                    </picture>                            </a>
                            <div class="card-body">
                                <h3>Mobile</h3>
                                <p><strong>Accept payments wherever you are.</strong></p>

                                <p>Built in GPRS SIM card</p>

                                <p>Connect anywhere in the UK</p>

                                <p>Long lasting battery</p><br>
                                <a href="{{url('contact')}}" class="btn p-2 btn-outline-orange">
                                    Find out more
                                </a>
                            </div>
                        </div>
           </div>
        </div>
    </div>

 
@endsection