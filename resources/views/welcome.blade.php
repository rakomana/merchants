@extends('layouts.app')

    @section('content')

    <div class="home-section2">




        <!--begin container -->

        <div class="container">



        <div class="row">

<!--begin col-md-6 -->

<div class="col-md-6">



    <h2 class="section-title dark-blue" style="color:#ac4c7c;"><strong>Take Payments Online 24/7.</strong></h2>

    <ul class="hero-list-checked second-list">

        <li><i class="icon icon-check-mark-2"></i><h4 style="color:#e1dae5;"><strong>Virtual payment terminal</strong></h4></li>

        <li><i class="icon icon-check-mark-2"></i><h4 style="color:#e1dae5;"><strong>Customizable experience</strong></h4></li>

        <li><i class="icon icon-check-mark-2"></i><h4 style="color:#e1dae5;"><strong>Lowest merchant costs</strong></h4></li>

    </ul>
    <br>
   

    <h2 class="section-title dark-blue" style="color:#ac4c7c;"><strong>Take Payments From Your Business or Take Your Business On The Go. </strong></h2>

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
      <input placeholder="Your email address" type="email" tabindex="3" required>
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

        </div>

    </div>

    <!--end home-section-->
<div class="container">
    <div class="row">
<!--begin col-md-6-->

<div class="col-md-6">

    <img src="images/safetyGIF_2020.gif" style="width:55%;" class="width-100 fluid" alt="about-us-image">

</div>

<!--end col-md-6-->

<!--begin col-md-6-->

<div class="col-md-6">



    <div class="tabs about-tabs">



    <h2 style="color:#252464"><span>Take payments <a style="color:#ac4c7c"><strong>ONLINE</strong></a> or over the phone.</span></h2>


        <div class="tab-container">



            <div class="tab-content text-left" data-tab="1">



                <p class="margin-bottom-20">Online payments allow a quick and easy route to increase your potential customer base. Your business is running 24/7!
                We can enable you to take payments through your website through a payment gateway, via email with a payment link, or over the phone with a virtual terminal.
                Our specialist payment consultants are her to help you choose the right option for your businesses needs. </p>

            </div>

        </div>
</div>


    </div>

    <div class="row">
<!--begin col-md-6-->

<div class="col-md-6">

<div class="tabs about-tabs">



<h2 style="color:#252464"><span>Take <a style="color:#ac4c7c"><strong>CARD</strong></a> payments with peace of mind</span></h2>


    <div class="tab-container">



        <div class="tab-content text-left" data-tab="1">



            <p class="margin-bottom-20">Whether you're new to card payments, or are looking to switch provider, we have specialist payment consultants waiting to help you. </p>
            <p>They find out how you would like to take card payments and create a bespoke pricing package that's right for you.
            All our terminals allow you to take contactless, Google Pay and Apple payments as standard so your customers can easily pay with a tap.  Your 
            reader are set up to take payments safely and securely to give you peace of mind that your funds are safe.</p>
            <p>Our dedicated set up teams allow you to get up and running in no time. We have no set up fee, can offer payments to your bank the next working
            day and if you're an existing merchant, guarantee to beat your current cost!</p>
            <p>We have a support team on hand 7 days a week if yo ever need them.</p>

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
    </section>


  <!--  <section class="section-grey">


        <div class="container">

          

            <h1 style="text-align:center;">Choose from a range of machines</h1>
<div class="wrapper">
<div class="card">
	<h3 class="card-title">Payment Gateway</h3>
    <p class="card-content"><strong>Accept all major credit and debit cards through your website.</strong></p>

<p class="card-content">Link to all major shopping baskets</p>

<p class="card-content">Your online shopping basket customized to your brand</p>

<p class="card-content">Simple to set up</p>
	</div>
    
	<div class="card">
		<h3 class="card-title">Pay by link</h3>
		<p class="card_text"><strong>Add a payment link to your emails and invoices.</strong></p>

          <p class="card-content">Create and send electronic invoices</p>

          <p class="card-content">Send a custom email with a pay now button</p>

          <p class="card-content">Simply copy and past a pay link into an email</p>
	</div>
	<div class="card">
		<h3 class="card-title">Virtual terminal</h3>
		<p class="card-content"><strong>Take payments over the phone via our secure online system.</strong></p>

          <p class="card-content">No website necessary</p>

          <p class="card-content">Once you have your login you're ready to go</p>

          <p class="card-content">Accessible from your phone, tablet, laptop or computer</p>
	</div>
</div>

<div class="wrapper">
<div class="card">
	<h3 class="card-title">Counter top</h3>
    <p class="card-content"><strong>Ideal for taking payments at a till.</strong></p>

          <p class="card-content">Compare design</p>

          <p class="card-content">Connected by phone or broadband</p>

          <p class="card-content">Quick receipting</p>
	</div>
    
	<div class="card">
    <h3 class="card-title">Portable</h3>
          <p class="card-content"><strong>Perfect for taking to your customers.</strong></p>

          <p class="card-content">Small & lightweight</p>

          <p class="card-content">50m range via Wi-Fi or Bluetooth</p>

          <p class="card-content">Long lasting battery</p>
	</div>
	<div class="card">
    <h3 class="card-title">Mobile</h3>
          <p class="card-content"><strong>Accept payments wherever you are.</strong></p>

          <p class="card-content">Built in GPRS SIM card</p>

          <p class="card-content">Connect anywhere in the UK</p>

          <p class="card-content">Long lasting battery</p>
	</div>
</div>


                </div>

<style>

 .wrapper{
     display: flex;
     justify-content: center;
     flex-wrap: wrap;
}
 .card{
    max-width: 300px;
     min-height: 250px;
     background: white;
     padding: 30px;
     box-sizing: border-box;
     color: #FFF;
     margin:20px;
     box-shadow: 0px 2px 18px -4px rgba(0,0,0,0.75);
}

.card:hover{
    background-color: #e1dae5;
}

 .card-title{
     margin-top: 0;
     font-size: 16px;
     font-weight: 600;
     letter-spacing: 1.2px;
}
 .card-content{
     font-size: 14px;
     letter-spacing: 0.5px;
     line-height: 1.5;
}

</style>
               

            </div>

    

    </section> -->

    <!--end section grey-->

    <!--begin section-white -->

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
                    <h2 class="e-5stars-after">Why choose <br>Energize Merchant Services?</h2>
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

    

@endsection
