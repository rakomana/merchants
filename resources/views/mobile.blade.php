@extends('layouts.app')

    @section('content')

    <div class="home-section2" style="background-image:url(images/mobile-app.jpg)">

        <!--begin container -->

        <div class="container">

        <div class="row">

<!--begin col-md-6 -->

<div class="col-md-6" style="padding-top:5%;">



    

    <h2 class="section-title dark-blue" style="color:#e1dae5;"><strong>Allow Customers To Order & Pay </strong></h2>
    <h4 style="color:#e1dae5;">Table Service, Collection, Delivery</h4>
    <br><br>
    <h4 style="color:#e1dae5;">Customise your own branded mobile app that allows you to share news, your location, display reviews, collect track & trace and so much more. All on your own mobile app</h4>

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
            
                <p>We will use your information in accordnce with our <a href="{{url('privacy')}}" style="color:blue"><u>Privacy Policy</u></a></p>
        
            <button name="submitbtn" type="submit" href="#" class="btn btn-primary" tabindex="0" style="color: white;">Get a FREE quote</button>
        
          </form>
        </div>

    </div>

</div>

</div>

        </div>

    </div>
<br><br><br>
    <!--end home-section-->
<div class="container">
    
<div class="row" style="
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
padding: 16px;
margin-bottom: 20px;
background-color: #f1f1f1;
">
<!--begin col-md-6-->

<div class="col-md-6">

<div class="tabs about-tabs">



<h2 style="color:#252464"><span><a style="color:#ac4c7c"><strong>Take orders however you want</strong></a></span></h2>

    <div class="tab-container">



        <div class="tab-content text-left" data-tab="1">



            <p class="margin-bottom-20">It’s easy to order, whether its for table service, collection or delivery. You can choose whichever options you like.
            </p>
            <p class="margin-bottom-20">You can allow card payments from any of these order types or offer the option to pay by cash. 
            </p>
            <p class="margin-bottom-20">Let your customers select a day and time for collection or delivery within your working hours. 
            </p>

            <!--end testimonials_item -->

        </div>

    </div>
</div>

</div>
<br>

<div class="col-md-6">

        <img src="images/online.png" style="width:100%;" class="width-100 fluid" alt="about-us-image">

    </div>

</div>

<!--end col-md-6-->

<div class="row" style="
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
padding: 16px;
margin-bottom: 20px;
background-color: #f1f1f1;
">
<!--begin col-md-6-->

<div class="col-md-6">
<br><br><br>
    <img src="images/order-options.png" style="width:100%;" class="width-100 fluid" alt="about-us-image">

</div>


<div class="col-md-6">



    <div class="tabs about-tabs">



    <h2 style="color:#252464"><span> <a style="color:#ac4c7c"><strong>Speed up Service</strong></a></span></h2>


        <div class="tab-container">

            <div class="tab-content text-left" data-tab="1">

            <p class="margin-bottom-20">Spend more time providing your service and products and less time taking orders and payments.
            </p>

            <p class="margin-bottom-20">Reduce queue length and promote contactless ordering and payments.
            </p>

            </div>

        </div>
</div>



    </div>

</div>

<!--second 2 rows-->
<div class="row" style="
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
padding: 16px;
margin-bottom: 20px;
background-color: #f1f1f1;
">
<!--begin col-md-6-->

<div class="col-md-6">

<div class="tabs about-tabs">



<h2 style="color:#252464"><span><a style="color:#ac4c7c"><strong>Loyalty card</strong></a></span></h2>

    <div class="tab-container">



        <div class="tab-content text-left" data-tab="1">



            <p class="margin-bottom-20">Offer your customers a branded loyalty card to encourage repeat custom.
            </p>
            <p class="margin-bottom-20">Offer discounts or free products/services any way you want. You can completely customise this branded loyalty card to fit your requirements and needs.  
            </p>
            <p class="margin-bottom-20">75% of consumers say they are likely to make another purchase after receiving an incentive. (Wirecard)
            </p>

            <!--end testimonials_item -->

        </div>

    </div>
</div>

</div>
<br>

<div class="col-md-6">
<br><br>
        <img src="images/loyalty card.png" style="width:100%; padding-top:0px;" class="width-100 fluid" alt="about-us-image">

    </div>

</div>

<!--end col-md-6-->

<div class="row" style="
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
padding: 16px;
margin-bottom: 20px;
background-color: #f1f1f1;
">
<!--begin col-md-6-->

<div class="col-md-6">
<br><br>
    <img src="images/Track-and-trace.png" style="width:100%;" class="width-100 fluid" alt="about-us-image">

</div>


<div class="col-md-6">



    <div class="tabs about-tabs">



    <h2 style="color:#252464"><span> <a style="color:#ac4c7c"><strong>Track & Trace</strong></a></span></h2>
    <h4>Improve customer retention</h4>


        <div class="tab-container">

            <div class="tab-content text-left" data-tab="1">

            <p class="margin-bottom-20">Easily collect customer information for track and trace log or your mailing list. Collecting customer information such as track and trace can be mandatory. So this allows for a convenient solution to collecting this information. 
            </p>
            <p class="margin-bottom-20">You can collect customer information for your mailing list to send out product/service information and drive up sales. 
            </p>

            </div>

        </div>
</div>

</div>

</div>
<!--end-->


</div>
</div>
</div>
    </section>

<!--begin section-white-->

  <br><br><br><br>

@endsection
