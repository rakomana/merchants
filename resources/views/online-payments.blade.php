@extends('layouts.app')

@section('content')
 
<div class="home-section2" style="background-image:url(images/Artboard10.jpg)">


        <div class="container">
            

        <div class="row">
            

<!--begin col-md-6 -->

<div class="col-md-6">
    

        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 text-center" style="text-align:left;">
                            <h2 class="smile-white" style="color:#252464;"><strong>Take Card Payments <br>Online.</strong></h2>
                            <p style="color:#e1dae5; font-size:20px;"><strong>Want to sell your products online? It can help you reach new customers, which should mean more sales in the long run.

                            Well, we’re here to help.</strong> </p>
                            <p style="color:#e1dae5; font-size:20px;"><strong>Our online payment gateway hooks up with the majority of leading shopping carts, so you can take payments through your website and get those sales coming in.</strong></p>
                                                   <!-- <a class="btn btn-outline-white mt-1" href="/get-a-free-quote/" id="pulloutBannerCta">Get a free quote</a> -->
            </div>
        </div>
        <br><br>
    </div>
    
</div>
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
            <fieldset>
            <button name="submitbtn" type="submit" href="#" class="btn btn-primary" tabindex="0">Get a FREE quote</button>
            </fieldset>
          </form>
<!--    <form id="contact" action="" method="post">
    <h3>Get your Free quote today</h3>

    <fieldset>
      <input placeholder="Your full name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your business name" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your contact number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your email address" type="email" tabindex="3" required>
    </fieldset>
    <fieldset>

      <button name="submitbtn" type="submit" href="#" class="button primary large" tabindex="0">Get a FREE quote</button>

    </fieldset>
  </form> -->
        </div>
</div>
</div>
</div>

<section class="section-white-xs" style="background-color:#f6f7f8">

        <!--begin container-->

        <div class="container">

            <!--begin row-->

            <div class="row">


            <div class="grid-x m-rich-unique-selling-points new-style " style="background-color:#f6f7f8">
    <div class="large-12 cell">
        <div class="grid-container" style="background-color:#f6f7f8" data-equalizer="usp-title" data-resize="usp-title" data-mutate="usp-title" data-e="xajg2n-e" data-events="resize">
            <div class="grid-x align-justify flex-container text-center" style="background-color:#f6f7f8" data-equalizer="usp-body" data-resize="usp-body" data-mutate="usp-body" data-e="6tafea-e" data-events="mutate">
                <div class="large-12 medium-12 small-12 align-center align-middle flex-container">
                    <h2 class="e-5stars-after">What Makes Us <br>Different?</h2>
                </div>

                <div class="large-3 medium-3 small-12  align-center align-middle">
                        <img class="lazy" src="/images/icons/33-338017_icon-fees-no-annual-fee-icon-hd-png.png" alt="" style="">
                                                <h3 data-equalizer-watch="usp-title" style="height: 58px;">No set up or exit fees</h3><br>
                                                <p data-equalizer-watch="usp-body" style="height: 100px;">We dont't have any charges to join us. The same if you leave at the end of your contract.</p>
                    </div>
                    <div class="large-3 medium-3 small-12  align-center align-middle">
                        <img class="lazy" src="/images/icons/Design-icon.png" alt="" style="">
                                                <h3 data-equalizer-watch="usp-title" style="height: 58px;">Bespoke packages</h3><br>
                                                <p data-equalizer-watch="usp-body" style="height: 100px;">We know one size doesn't fit all. So we create a package that's bespoke to your needs.</p>
                    </div>
                    <div class="large-3 medium-3 small-12  align-center align-middle">
                        <img class="lazy" src="/images/icons/elavon-logo-346.png" alt="" style="">
                                                <h3 data-equalizer-watch="usp-title" style="height: 58px;">Partnered with Elavon</h3><br>
                                                <p data-equalizer-watch="usp-body" style="height: 100px;">Your transactions will be handled by Elevon, one of the most trusted acquiring banks on the market.</p>
                    </div>
                    <div class="large-3 medium-3 small-12  align-center align-middle">
                        <img class="lazy" src="/images/icons/1108835-200.png" alt="" style="">
                                                <h3 data-equalizer-watch="usp-title" style="height: 58px;">Specialist Payment Consultant</h3><br>
                                                <p data-equalizer-watch="usp-body" style="height: 100px;">A Payment Consultant will get to know your business and provide you with a personalised pricing package that's right for you.</p>
                    </div>
            </div>
        </div>
    </div>
</div>

            </div>

            <!--end row-->



        </div>

        <!--end container-->



    </section>

 
<div class="container">
    <div class="row">
<!--begin col-md-6-->

<div class="col-md-6">


    </div>

    <div class="row">
<!--begin col-md-6-->

<div class="col-md-6">

<div class="tabs about-tabs">



<h2 style="color:#252464"><span>Make your website work harder. Take card payments online.</span></h2>


    <div class="tab-container">



        <div class="tab-content text-left" data-tab="1">



            <p class="margin-bottom-20">Being able to take card payments on your site is an easy way to get more 
            customers and get more sales. It’s what it’s all about, right? Which is why we offer simple and secure 
            ways to accept online payments. From plugins that integrate with the most popular shopping carts, to 
            customisable checkout pages, we’ll get you taking card payments online</p>
           

            <!--end testimonials_item -->

        </div>

    </div>
</div>

</div>

<!--end col-md-6-->

<!--begin col-md-6-->

<div class="col-md-6">

        <img src="images/giphy.gif" style="width:75%;" class="width-100 fluid" alt="about-us-image">

    </div>

</div>

<!--end col-md-6-->



</div>



        </div>
    </div>
</div>
  


<section class="section-white-xs" style="background-color:#f6f7f8">

        <!--begin container-->

        <div class="container">

            <!--begin row-->

            <div class="row">
            <section >
    <div class="module v2-new-or-switching-module overflow-hidden in-viewport ">
        <div class="container">
        <h1 style="text-align:center;">Choose from a range of machines</h1>
        <link rel="stylesheet" type="text/css" href="css\additional\tp.min78ce.css">
            <div class=" card-deck justify-content-around">
                        <div class="card border-0">
                            <a href="#">

                                    <picture>
                                        <source srcset="images/payment-gateway.png" type="image/webp">
                                        <img src="images/payment-gateway.png" class="card-img-top lazy">
                                    </picture>                            </a>
                            <div class="card-body">
                                <h3>Payment Gateway</h3>
                                <p><strong>Accept all major credit and debit cards through your website.</strong></p>

                                <p>Link to all major shopping baskets</p>

                                <p>Your online shopping basket customized to your brand</p>

                                <p>Simple to set up</p>
                                <a href="{{url('contact')}}" class="btn p-2 btn-outline-orange">
                                    Find out more
                                </a>
                            </div>
                        </div>
                        <div class="card border-0">
                            <a href="#/">

                                    <picture>
                                        <source srcset="images/link.png" type="image/webp">
                                        <img src="images/98-989061_svg-link-clip-art-royalty-free-download-link.png" class="card-img-top lazy">
                                    </picture>                            </a>
                            <div class="card-body">
                                <h3>Pay by link</h3>
                                <p><strong>Add a payment link to your emails and invoices.</strong></p>

                                <p>Create and send electronic invoices</p>

                                 <p>Send a custom email with a pay now button</p>

                                 <p>Simply copy and past a pay link into an email</p><br>
                                <a href="{{url('contact')}}" class="btn p-2 btn-outline-orange">
                                    Find out more
                                </a>
                            </div>
                        </div>
                        <div class="card border-0">
                            <a href="{{url('contact')}}">

                                    <picture>
                                        <source srcset="images/payment-gateway-solutions.png" type="image/webp">
                                        <img src="images/payment-gateway-solutions.png" class="card-img-top lazy">
                                    </picture>                            </a>
                            <div class="card-body">
                                <h3>Virtual terminal</h3>
                                <p class="card-content"><strong>Take payments over the phone via our secure online system.</strong></p>

                                <p class="card-content">No website necessary</p>

                                <p class="card-content">Once you have your login you're ready to go</p>

                                <p class="card-content">Accessible from your phone, tablet, laptop or computer</p><br>
                                <a href="{{url('contact')}}" class="btn p-2 btn-outline-orange">
                                    Find out more
                                </a>
                            </div>
                        </div>
            </div><br><br>

    </div>
 </section>

            </div>

            <!--end row-->



        </div>

        <!--end container-->



    </section>

@endsection