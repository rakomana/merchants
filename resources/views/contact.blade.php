@extends('layouts.app')

@section('content')
<section>
<div class="home-section2" style="background-image:url(images/Contact-Us.jpg)">


        <div class="container">
            

        <div class="row">
            
<br><br><br><br><br><br><br><br><br><br><br><br>
<!--begin col-md-6 -->
    </div>
    
</div>
</section>

<body>
	<div class="container">
		<div class="innerwrap">
		
			<section class="section1 clearfix">
				<div class="textcenter">
					
					<span class="seperator"></span>
					<h1>Get In Touch</h1>
				</div>
			</section>
		
			<section class="section2 clearfix">
				<div class="col2 column1 first">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9552410.023690216!2d-13.437587557243363!3d54.23086390111792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2sza!4v1603806359568!5m2!1sen!2sza" width="600" height="450" frameborder="0" style="border:0; overflow:hidden; height:656px; width:100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="col2 column2 last">
					<div class="sec2innercont">
						<div class="sec2addr">
							<p>xxxx, xxxxxxxxxxx xxxxxxxxx UK</p>
							<p><span class="collig">Email :</span> xxxxx@yourdomail.com</p>
						</div>
					</div>
					<div class="sec2contactform">
                        <h3 class="sec2frmtitle">For more information complete our contact form and one of our specialist payment consultants will contact you</h3>
						<form action="{{url('contact')}}" method="POST">
							@csrf
							@if ($message = Session::get('success'))
							<div class="alert alert-success alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>	
									<strong>{{ $message }}</strong>
							</div>
							@endif
							<div class="clearfix">
								<input class="col2 first" name="full_name" type="text" placeholder="FirstName" required>
								<input class="col2 last" type="text" placeholder="LastName" required>
							</div>
							<div class="clearfix">
								<input  class="col2 first" name="email" type="Email" placeholder="Email">
								<input class="col2 last" name="phone_number" type="text" placeholder="Contact Number">
							</div>
							<div class="clearfix">
								<textarea name="message" id="" cols="30" rows="7" placeholder="Your message here..." required></textarea>
							</div>
							<button name="submitbtn" type="submit" href="#" class="button primary large" tabindex="0">Send</button>
						</form>
					</div>

				</div>
			</section>
		
		</div>
	</div>
</body>
 
    
 
 
<style>

* {
	margin:0px;
	padding:0px;
}
*, *:after, *:before { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing: border-box; }

.clearfix:before, .clearfix:after { display: table; content: ''; }
.clearfix:after { clear: both; }


body {
	background: #ffffff;
	color: #333;
	font-weight: normal;
	font-size: 1em;
	font-family: 'Roboto', Arial, sans-serif;
}

input:focus, textarea:focus, keygen:focus, select:focus {
	outline: none;
}
::-moz-placeholder {
	color: #666;
	font-weight: 300;
	opacity: 1;
}

::-webkit-input-placeholder {
	color: #666;
	font-weight: 300;
}


/* Contact Form Styling */
.textcenter {
	text-align: center;
}
.section1 {
	text-align: center;
	display: table;
	width: 100%;
}
.section1 .shtext {
	display: block;
	margin-top: 20px;
}
.section1 .seperator {
	border-bottom:1px solid #a2a2a2;
	width: 35px;
	display: inline-block;
	margin: 20px;
}

.section1 h1 {
	font-size: 40px;
	color: #252464;
	font-weight: normal;
}

.section2 {
    width: 1200px;
    margin: 25px auto;
}
.section2 .col2 {
	width: 48.71%;
}
.section2 .col2.first {
	float: left;
}
.section2 .col2.last {
	float: right;
}
.section2 .col2.column2 {
	padding: 0 30px;
}
.section2 span.collig {
	color: #a2a2a2;
	margin-right: 10px;
	display: inline-block;
}
.section2 .sec2addr {
	display: block;
	line-height: 26px;
}
.section2 .sec2addr p:first-child {
	margin-bottom: 10px;
}
.section2 .sec2contactform input[type="text"], 
.section2 .sec2contactform input[type="email"],
.section2 .sec2contactform textarea {
    padding: 18px;
    border: 0;
    background: #EDEDED;
    margin: 7px 0;
}
.section2 .sec2contactform textarea {
	width: 100%;
	display: block;
	color: #666;
  resize:none;
}
.section2 .sec2contactform input[type="submit"] {
	padding: 15px 40px;
    color: #fff;
    border: 0;
    background: #252464;
    font-size: 16px;
    text-transform: uppercase;
    margin: 7px 0;
    cursor: pointer;
}
.section2 .sec2contactform h3 {
	font-weight: normal;
    margin: 20px 0;
    margin-top: 30px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 19px;
    color: #ac4c7c;
}

/* @media querries */

@media only screen and (max-width: 1266px) {
	.section2 {
		width: 100%;
	}
}
@media only screen and (max-width: 960px) {
	.container {
		padding: 0 30px 70px;
	}
	.section2 .col2 {
		width: 100%;
		display: block;
	}
	.section2 .col2.first {
		margin-bottom: 10px;
	}
	.section2 .col2.column2 {
		padding: 0;
	}
	body .sec2map {
		height: 250px !important;
	}
}
@media only screen and (max-width: 768px) {
	.section2 .sec2addr {
		font-size: 14px;
	}
	.section2 .sec2contactform h3 {
		font-size: 16px;
	}
	.section2 .sec2contactform input[type="text"], .section2 .sec2contactform input[type="email"], .section2 .sec2contactform textarea {
		padding: 10px;
		margin:3px 0;
	}
	.section2 .sec2contactform input[type="submit"] {
		padding: 10px 30px;
		font-size: 14px;
	}
}
@media only screen and (max-width: 420px) {
	.section1 h1 {
		font-size: 28px;
	}	
}
</style>
 
@endsection