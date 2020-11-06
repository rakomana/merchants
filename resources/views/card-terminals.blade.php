@extends('layouts.app')

@section('content')


<div class="home-section2" style="background-image:url(images/Artboard5.jpg; background-size:100%; width:100%; position:relative;">

        <!--begin container -->

        <div class="container">

        <div class="row">

<!--begin col-md-6 -->

<div class="col-md-6" style="padding-top:5%;">


    <h2 class="section-title dark-blue" style="color:#e1dae5;"><strong>Take Payments For Your Business or Take Your Business On The Go </strong></h2>

    <ul class="hero-list-checked second-list">

        <li><i class="icon icon-check-mark-2"></i><h4 style="color:#e1dae5;"><strong>Accept Google Pay & Apple Pay</strong></h4></li>

        <li><i class="icon icon-check-mark-2"></i><h4 style="color:#e1dae5;"><strong>£0 Set up</strong></h4></li>

        <li><i class="icon icon-check-mark-2"></i><h4 style="color:#e1dae5;"><strong>Lowest merchant costs</strong></h4></li>

    </ul>

</div>


<!--end col-md-6 -->



<!--begin col-md-6 -->

<div class="col-md-6">



    <!--begin newsletter_info -->

    <div class="newsletter_info3 margin-bottom-40">



        <form id="contact" action="{{url('quote')}}" method="post">
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
            </div>
            @endif
        
            <h3>Get your Free quote today</h3>
        
            <fieldset>
              <input name="full_name" placeholder="Your full name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
              <input name="business_name" placeholder="Your business name" type="text" tabindex="2" required>
            </fieldset>
            <fieldset>
              <input name="phone_number" placeholder="Your contact number" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset>
              <input name="email" placeholder="Your email address" type="email" tabindex="3" required>
            </fieldset>
            
                
            <button name="submitbtn" type="submit" href="#" class="btn btn-primary" tabindex="0" style="color: white;">Get a FREE quote</button>
        
          </form>
        </div>

    </div>

</div>

</div>

        </div>

    </div>
<!--end col-md-6 -->

<div class="container">
   

<div class="row">
<!--begin col-md-6-->

<div class="col-md-6">

<div class="tabs about-tabs">

<h2 style="color:#252464"><span>Take <a style="color:#ac4c7c"><strong>CARD</strong></a> payments with peace of mind</span></h2>


    <div class="tab-container">



        <div class="tab-content text-left" data-tab="1">



            <p class="margin-bottom-20">Whether you're new to card payments or are looking to switch provider, we have specialist payment consultants waiting to help you. </p>
            <p>They find out how you would like to take card payments and create a bespoke pricing package that's right for you.
            All our terminals allow you to take contactless, Google Pay and Apple payments as standard so your customers can easily pay with a tap.  Your 
            readers are set up to take payments safely and securely to give you peace of mind that your funds are safe.</p>
            <p>Our dedicated set up teams allow you to get up and running in no time. We have no set up fee, can offer payments to your bank the next working
            day and if you're an existing merchant, guarantee to beat your current cost!</p>
            <p>We have a support team on hand 7 days a week if you ever need them.</p>

            <!--end testimonials_item -->

        </div>

    </div>
</div>

</div>

<!--end col-md-6-->

<!--begin col-md-6-->

<div class="col-md-6">

        <img src="images/chip-and-pin-terminal.gif" style="width:75%;" class="width-100 fluid" alt="about-us-image">

    </div>

</div>

<!--end col-md-6-->



</div>

        </div>
    </div>
</div>

<!--Start of Images-->
<div class="module v2-new-or-switching-module overflow-hidden in-viewport">
        <div class="container">
        <h1 style="text-align:center;">Choose from a range of machines</h1>
        <link rel="stylesheet" type="text/css" href="css\additional\tp.min78ce.css">
            <div class=" card-deck justify-content-around">
                         
            <div class=" card-deck justify-content-around">
                        <div class="card border-0">
                           

                                    <picture>
                                        <source srcset="images/Mobile-Payment.jpg" type="image/webp">
                                        <img src="images/Mobile-Payment.jpg" class="card-img-top lazy">
                                    </picture>                            
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
                            

                                    <picture>
                                        <source srcset="images/mobile-payments-blog_699x375.jpeg" type="image/webp">
                                        <img src="images/mobile-payments-blog_699x375.jpeg" class="card-img-top lazy">
                                    </picture>                            
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
                           

                                    <picture>
                                        <source srcset="images/cardprocesing.jpg" type="image/webp">
                                        <img src="images/cardprocesing.jpg" class="card-img-top lazy">
                                    </picture>                            
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
<br><br><br><br>
 
@endsection