<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="">

    <meta name="description" content="">



    <title>Energize - Merchant Services</title>



	<!-- LOAD JQUERY LIBRARY -->

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

	

    <!-- Loading Bootstrap -->

    <link href="css\bootstrap.css" rel="stylesheet">



    <!-- Loading Template CSS -->

    <link href="css\style.css" rel="stylesheet">

    <link href="css\style-magnific-popup.css" rel="stylesheet">

    

    <!-- Font Awesome -->

    <link href="css\fonts.css" rel="stylesheet">

    <link href="font\flaticon.css" rel="stylesheet">

    

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,400i,700,700i,900" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lobster|Oleo+Script+Swash+Caps" rel="stylesheet">



    <!-- LOADING FONTS AND ICONS -->        

    <link rel="stylesheet" type="text/css" href="revolution\fonts\pe-icon-7-stroke\css\pe-icon-7-stroke.css">

    <link rel="stylesheet" type="text/css" href="revolution\fonts\font-awesome\css\font-awesome.min.css">



    <!-- Font Favicon -->

    <link rel="shortcut icon" href="#">



    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->

    <!--[if lt IE 9]>

      <script src="js/html5shiv.js"></script>

      <script src="js/respond.min.js"></script>

    <![endif]-->

    

    <!--headerIncludes-->

    

</head>

<body>


    <!--end top-intro -->



    <!--begin header -->

    <header class="header" style="background-color: rgba(25, 22, 29, 0.8);">



        <!-- begin navbar -->

        <div class="navbar yamm navbar-default " style="background-color: rgba(35, 34, 97, 0.8);">

          

            <!-- begin container -->

            <div class="container">



                <!-- begin navbar-header -->

                <div class="navbar-header">

                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a href="{{url('/')}}"><img src="images/logo/merchant_logo.png" alt="" style="width:200px"/></a>

                </div>

                <!-- end navbar-header -->



                <!-- begin navbar -->

                <div id="navbar-collapse-02" class="navbar-collapse collapse">

                    

                    <!-- begin nav -->

                    <ul class="nav navbar-nav text-right">

                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:white;">Products</a>
                            
                            <ul role="menu" class="dropdown-menu">

                                <li>
                                    <a href="{{url('face-to-face-payments')}}"> Face-to-Face Payments </a>
                                <li>

                                <li>
                                    <a href="{{url('face-to-face-payments')}}"> Online Payments </a>
                                </li>

                            </ul>

                        </li>



                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:white;">About Us</a>

                            <ul role="menu" class="dropdown-menu">

                                <li>
                                    <a href="{{url('about-us')}}"> Who Are We </a>
                                <li>

                                <li>
                                    <a href="#"> Careers </a>
                                </li>

                            </ul>

                        </li>

                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:white;">Support</a>

                            <ul role="menu" class="dropdown-menu">

                                <li>
                                    <a href="{{url('contact')}}"> Contact Us </a>
                                <li>

                            </ul>

                        </li>

                        <li class="ps-main-nav__button-container"><a class="button primary" href="#">Get a quote</a></li>

                    </ul>

                    <!-- end nav -->



                </div>

                <!-- end navbar -->



            </div>

            <!-- end container -->



        </div>

        <!-- end navbar -->

            

    </header>

    <!--end header -->

    @yield('content')


    <!--begin footer -->

    <div class="footer">

            

        <!--begin container -->

        <div class="container">

        

            <!--begin row -->

            <div class="row footer-top">

            

                <!--begin col-md-4 -->

                <div class="col-md-4 padding-bottom-50">

                

                    <h4>ABOUT US</h4>

                    

                    <p class="margin-bottom-20">Quis autem velis etis reprehender etims quiste voluptate velite esse quam nihil etsa illum sedit consequatur netsum.</p>



                    <a href="#" class="btn-sm btn-blue">Discover More</a>

                                        

                </div>

                <!--end col-md-4 -->

                

                <!--begin col-md-4 -->

                <div class="col-md-4 padding-bottom-50">

                

                    <h4>USEFUL LINKS</h4>

                    

                    <ul class="footer-list">

                        

                        <li class="first"><a href="#" target="blank">Financial Planning</a></li>

                        

                        <li><a href="#" target="blank">Financial Solutions For Startups</a></li>

                        

                        <li><a href="#" target="blank">Business Context 2017</a></li>

                        

                        <li><a href="#" target="blank">Target Your Best Loan Posibility</a></li>

                        

                    </ul>

                    

                </div>

                <!--end col-md-4 -->

                

                <!--begin col-md-4 -->

                <div class="col-md-4 padding-bottom-50">

                

                    <h4>CONTACT DETAILS</h4>

                    

                    <p>Get in touch today to discover how we can benefit your business.</p>

                    

                    <p class="contact_info"><i class="icon icon-pin-map"></i> Oxford Street, London, UK, N1 1ED</p>

                    

                    <p class="contact_info"><i class="icon icon-email-envelope"></i> <a href="mailto:contact@email.com">contact@marketer.com</a></p>

                    

                    <p class="contact_info"><i class="icon icon-call-phone"></i> +44 987 654 321</p>

                

                </div>

                <!--end col-md-4 -->

                

            </div>

            <!--end row -->

            

            <!--begin row -->

            <div class="row">

                

                <!--begin footer-bottom -->

                <div class="footer-bottom">

                

                    <!--begin col-md-5 -->

                    <div class="col-md-5">

                        

                        <!--begin copyright -->

                        <div class="copyright ">

                            <p>© 2020 Energize Merchant Services <a href="#" target="_blank"></a></p>

                            

                        </div>

                        <!--end copyright -->

                       

                    </div>

                    <!--end col-md-5 -->

                    

                    <!--begin col-md-2 -->

                    <div class="col-md-2 text-center">

                    

                        <a href="#top-intro" class="scrool top-scroll"><i class="icon icon-angle-up"></i></a>

                        

                    </div>

                    <!--end col-md-2 -->

                    

                    <!--begin col-md-5 -->

                    <div class="col-md-5">

                                                        

                        <!--begin footer_social -->

                        <ul class="footer_social">

                            <li>

                                Follow Us:

                            </li>

                            <li>

                            <a href="#">

                                <i class="icon icon-twitter"></i>

                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <i class="icon icon-pinterest"></i>

                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <i class="icon icon-facebook"></i>

                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <i class="icon icon-instagram"></i>

                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <i class="icon icon-skype"></i>

                            </a>

                        </li>

                        </ul>

                        <!--end footer_social -->

                        

                    </div>

                    <!--end col-md-5 -->

                        

                </div>

                <!--end footer-bottom -->

                        

            </div>

            <!--end row -->

            

        </div>

        <!--end container -->

                

    </div>

    <!--end footer -->



     <script type="text/javascript">



                console.log(" Itchy " != " Scratchy ")





                </script>





    <!-- Load JS here for greater good =============================-->

    <script src="js\jquery-1.11.3.min.js"></script>

    <script src="js\bootstrap.min.js"></script>

    <script src="js\jquery.scrollTo-min.js"></script>

    <script src="js\jquery.magnific-popup.min.js"></script>

    <script src="js\plugins.js"></script>

    <script src="js\custom.js"></script>

   

    

</body></html>