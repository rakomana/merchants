@extends('layouts.app')

@section('content')
 
<div class="home-section2" style="background-image:url(images/mobile.jpg)">


        <div class="container">
            

        <div class="row">
            

<!--begin col-md-6 -->

<div class="col-md-6">
    

        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 text-center" style="text-align:left;">
                            <h2 class="smile-white" style="color:#ac4c7c;"><strong>Take Card Payments <br>Online.</strong></h2>
                            <p style="color:#252464;">Want to sell your products online? It can help you reach new customers,<br>which should mean more sales in the long run.

Well, we’re here to help. </p>
<p style="color:#252464;">Our online payment gateway hooks up with the majority of leading shopping carts, <br>so you can take payments through your website and get those sales coming in.</p>
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
            <p>We will use your information in accordnce with our <a style="color:blue"><u>Privacy Policy</u></a></p>
        </fieldset>
        <fieldset>
    
        <button name="submitbtn" type="submit" href="#" class="button primary large" tabindex="0">Get a FREE quote</button>
    
        </fieldset>
      </form>
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

<section>
<div class="container somesection">
  <div class="row">
  <div class="col-md-6 texto-post-qm-somos"> 
      <h2>Make your website work harder. Take card payments online.</h2> 
  Being able to take card payments on your site is an easy way to get more customers and get more sales. It’s what it’s all about, right? Which is why we offer simple and secure ways to accept online payments. From plugins that integrate with the most popular shopping carts, to customisable checkout pages, we’ll get you taking card payments online
    </div>
    <div class="col-md-6 img-post-qm-somos">
      <img src="images/giphy.gif" class="post-qm-somos-img" style="width:70%;">
    </div>
  </div>
    </div>
</section>
 
@endsection