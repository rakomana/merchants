@extends('layouts.app')

    @section('content')

    <div class="home-section2" style="background-image:url(images/epos/Artboard.jpg)">
    
        <!--begin container -->

        <div class="container">

        <div class="row">

<!--begin col-md-6 -->

<div class="col-md-6" style="padding-top:5%;">



    

    <h2 class="section-title dark-blue" style="color:#e1dae5;"><strong>EPOS for Small Business </strong></h2>
    <h4 style="color:#e1dae5;">Complete EPOS system for small business with the software and hardware tools to take payments, improve business operations and gain crucial data insights.</h4>
    <br><br>
    <ul class="hero-list-checked second-list">

        <li><i class="icon icon-check-mark-2"></i><h4 style="color:#e1dae5;"><strong>Touch-screen technology backed up by award-winning EPOS software</strong></h4></li>

        <li><i class="icon icon-check-mark-2"></i><h4 style="color:#e1dae5;"><strong>80 mm receipt printer and secure all-metal cash drawer</strong></h4></li>

        <li><i class="icon icon-check-mark-2"></i><h4 style="color:#e1dae5;"><strong>make informed decisions on sales, stock and much more</strong></h4></li>

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
            
                <p>We will use your information in accordnce with our <a href="{{url('privacy')}}" style="color:blue"><u>Privacy Policy</u></a></p>
        
            <button name="submitbtn" type="submit" href="#" class="btn btn-primary" tabindex="0" style="color: white;">Get a FREE quote</button>
        
          </form>
        </div>

    </div>

</div>

</div>

        </div>

    </div>
<br><br>
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



<h2 style="color:#252464"><span><a style="color:#ac4c7c"><strong>Reporting</strong></a></span></h2>
<h4>Customisable dashboards</h4>

    <div class="tab-container">



        <div class="tab-content text-left" data-tab="1">



            <p class="margin-bottom-20">Create a custom dashboard to access live business statistics across all your locations without the need for individual static reports.</p>
            
            <p>
            • Real-time data insights
            </p>
            <p>
            • Performance data on sales, products & staff
            </p>
            <p>
            • Set customised & individual dashboards
            </p>

            <!--end testimonials_item -->

        </div>

    </div>
</div>

</div>
<br>

<div class="col-md-6">

        <img src="images/epos/reporting.jpg" style="width:85%;" class="width-100 fluid" alt="about-us-image">

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
    <img src="images/epos/unnamed.jpg" style="width:85%;" class="width-100 fluid" alt="about-us-image">

</div>


<div class="col-md-6">



    <div class="tabs about-tabs">



    <h2 style="color:#252464"><span> <a style="color:#ac4c7c"><strong>Inventory</strong></a></span></h2>
    <h4>Customisable dashboards</h4>


        <div class="tab-container">

            <div class="tab-content text-left" data-tab="1">

            <p class="margin-bottom-20">Monitor your inventory levels with ease and efficiency. Keep your best-selling products in circulation and forget unnecessary stock takes.</p>
            
            <p>
            • Raise purchase orders automatically
            </p>
            <p>
            • Monitor wastage
            </p>
            <p>
            • Transfer stock between locations
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



<h2 style="color:#252464"><span><a style="color:#ac4c7c"><strong>Integrate 100+ apps</strong></a></span></h2>
<h4>Do more with EPOS. Apps & tools to aid your business</h4>

    <div class="tab-container">



        <div class="tab-content text-left" data-tab="1">



            <p class="margin-bottom-20">Make use of some of the most popular business applications through your Epos system.</p>
            
            <p>
            • In-store loyalty program builders
            </p>
            <p>
            • Accounting software
            </p>
            <p>
            • Automate your business with programs such as Zapier
            </p>

            <!--end testimonials_item -->

        </div>

    </div>
</div>

</div>
<br>

<div class="col-md-6">
<br><br>
        <img src="images/epos/task.jpg" style="width:85%;" class="width-100 fluid" alt="about-us-image">

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
    <img src="images/epos/looking-after-customers_176982890.jpg" style="width:85%;" class="width-100 fluid" alt="about-us-image">

</div>


<div class="col-md-6">



    <div class="tabs about-tabs">



    <h2 style="color:#252464"><span> <a style="color:#ac4c7c"><strong>Customers</strong></a></span></h2>
    <h4>Improve customer retention</h4>


        <div class="tab-container">

            <div class="tab-content text-left" data-tab="1">

            <p class="margin-bottom-20">Log customer information as the make purchases. Invoice, give credit and collect contact information to promote your business.</p>
            
            <p>
            • Create customer profiles based on purchase habits
            </p>
            <p>
            • Collect essential marketing information
            </p>
            <p>
            • Create branded loyalty cards
            </p>

            </div>

        </div>
</div>

</div>

</div>
<!--end-->

<!--second 3 rows-->
<div class="row" style="
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
padding: 16px;
margin-bottom: 20px;
background-color: #f1f1f1;
">
<!--begin col-md-6-->

<div class="col-md-6">

<div class="tabs about-tabs">



<h2 style="color:#252464"><span><a style="color:#ac4c7c"><strong>Employees</strong></a></span></h2>
<h4>Improve staff performance</h4>

    <div class="tab-container">



        <div class="tab-content text-left" data-tab="1">



            <p class="margin-bottom-20">Employee reporting highlights your best performing staff and areas that may require attention.</p>
            
            <p>
            • Staff clocking in & out
            </p>
            <p>
            • Generate working hours & pay
            </p>
            <p>
            • Track upselling performance of your staff
            </p>

            <!--end testimonials_item -->

        </div>

    </div>
</div>

</div>
<br>

<div class="col-md-6">
<br><br>
        <img src="images/epos/getty_690855708_331314.jpg" style="width:85%;" class="width-100 fluid" alt="about-us-image">

    </div>

</div>
<br><br><br>
<!--end col-md-6-->

<!--begin row-->

<div class="row">

            

<!--begin col-md-12-->

<div class="col-md-12 text-center margin-bottom-20">

    <h2 class="section-title dark-blue"><strong>EPOS software that works for your business</strong></h2>

    

    <h4>Equip your EPOS system with only the tools that work for you and your staff. Receive crucial business data to help you increase your businesses productivity, customer experience and profit.</h4>



</div>

<!--end col-md-12-->


</div>
</div>

<!--end row-->
<!--begin section-white -->

<section class="section-white" style="padding-left:15%;">

        

<!--begin container-->

<div class="container">



    <!--begin row-->

    <div class="row">



        <!--begin col-md-6 -->

        <div class="col-md-6">



            <h2 class="section-title dark-blue" style="color:#ac4c7c"><strong>Retail</strong></h2>

            

            <p><strong>Business type: </strong><br>

            <i>Shops, jewellers, trade desks, fashion boutiques, mechanics, etc.</i> </p>


            <p>Features: </p>

            <ul class="hero-list-checked second-list">

                <li><i class="icon icon-check-mark-2"></i><p>Barcoding</p></li>

                <li><i class="icon icon-check-mark-2"></i><p>Pay on account </p></li>

                <li><i class="icon icon-check-mark-2"></i><p>Hardware integration </p></li>

                <li><i class="icon icon-check-mark-2"></i><p>Online store integration </p></li>

                <li><i class="icon icon-check-mark-2"></i><p>Powerful promotions </p></li>

                <li><i class="icon icon-check-mark-2"></i><p>Booking system  </p></li>

                <li><i class="icon icon-check-mark-2"></i><p>Create & print invoices  </p></li>

                <li><i class="icon icon-check-mark-2"></i><p>Stock management  </p></li>

            </ul>

        </div>

        <!--end col-md-6 -->



        <!--begin col-md-6 -->

        <div class="col-md-6">



            <h2 class="section-title dark-blue"><strong>Hospitality</strong></h2>

            

            <p><strong>Business type:</strong><br>

            <i>Bars, nightclubs, pubs, restaurants, cafés, health spas, hotels, B&B's, gyms, etc.</i></p>


            <p>Features: </p>
            <ul class="hero-list-checked second-list">

                <li><i class="icon icon-check-mark-2" style="color:#252464;"></i><p>Table plan</p></li>

                <li><i class="icon icon-check-mark-2" style="color:#252464;"></i><p>Cloud syncing</p></li>

                <li><i class="icon icon-check-mark-2" style="color:#252464;"></i><p>Printer support</p></li>

                <li><i class="icon icon-check-mark-2" style="color:#252464;"></i><p>Master products</p></li>

                <li><i class="icon icon-check-mark-2" style="color:#252464;"></i><p>Quick login</p></li>

                <li><i class="icon icon-check-mark-2" style="color:#252464;"></i><p>Split bills</p></li>

                <li><i class="icon icon-check-mark-2" style="color:#252464;"></i><p>Online booking</p></li>

                <li><i class="icon icon-check-mark-2" style="color:#252464;"></i><p>Loyalty system</p></li>

            </ul>

        </div>


            <!--end newsletter_info -->



        </div>

        <!--end col-md-6 -->



    </div>

    <!--end row-->



</div>

<!--end container-->



</section>

<!--end section-white-->





  

@endsection
