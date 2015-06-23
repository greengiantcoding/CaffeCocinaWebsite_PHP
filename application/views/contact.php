<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="/assets/css/contact.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="/assets/js/JQueryLib.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
</head>
<body id='body'>



<!-- HEADER/NAVBAR -->
	<div class='col-xs-12 navbarHeader navbar-default'>
		
		<div class='col-xs-2 navbarLogo' data-toggle='collapse' data-target='#theList'>
		</div>

	
		
		<div class='col-xs-5 col-xs-offset-1 navbarLink navbarBack collapse navbar-collapse' id='theList'>
			<ul class='centerItem listItems'>
				<li class='navLinks navLinkBack navLinkOff'><a class='navLinkColorOff' href='/home'>Home</a></li>
				
				<li class='dropdown navLinks navLinkBack navLinkOff'>
					<a href="#" class='dropdown-toggle listLinkColor' data-toggle='dropdown' role='button' aria-expanded='false'>About</span><span class="caret"></span></a>
					<ul class='dropdown-menu' role='list'>
						<li class='navLinksDropdown '><a class='navLinksDropdownColor' href='/ourstory'>Our Story</a></li>
						<li class='navLinksDropdown '><a class='navLinksDropdownColor' href='/photo_album'>Photos</a></li>
					</ul>
				</li>

				<li class='dropdown navLinks navLinkBack navLinkOff'>
					<a href="#" class='dropdown-toggle listLinkColor' data-toggle='dropdown' role='button' aria-expanded='false'>Menu<span class="caret"></span></a>
					<ul class='dropdown-menu' role='list'>
						<li class='navLinksDropdown'><a class='navLinksDropdownColor' href='/menu'>Caffe Menu</a></li>
						<li class='navLinksDropdown'><a class='navLinksDropdownColor' href='/catering'>Catering</a></li>
					</ul>
				</li>

				<li class='navLinks navLinkBack navLinkOff'><a class='navLinkColorOff' href='/events'>Events</a></li>
				<li class='navLinks navLinkBack navLinkOn'><a class='navLinkColorOn' href='/contact'>Contact</a></li>

				<li class='navLinks navLinkBack navLinkOff'><a class='navLinkColorOff' href='/review'>Reviews</a></li>
				<li class='navLinks navLinkBack navLinkOff'><a class='navLinkColorOff' href='/merchandise'>Store</a></li>
			</ul>
		</div>
		<button class='pull-right toggleBox collapsed navbar-toggle navbar-collapse' data-toggle='collapse' data-target='#theList'>
        <span class="fa fa-bars fa-lg"></span>
		</button>
	</div>
<!-- END HEADER/NAVBAR -->

<!-- Main Body Content -->
	
		<div class='col-xs-6 col-xs-offset-3 col-md-3 col-md-offset-1'>
			<div class='businessCard'>
			<!-- Business Card -->
				<h5 class='cardInfo'>Contacts</h5>			
				<!-- Phone Number -->
				<div class='row'>
					<div class='col-xs-3 cardLabel'>
						<h5>Phone:</h5>
					</div>
					<div class='col-xs-7 cardContent'>
						<h5>360-697-2004</h5>
					</div>
				</div>
				<div class='row'>
					<div class='col-xs-3 cardLabel'>
						<h5>Email:</h5>
					</div>
					<div class='col-xs-7 cardContent'>
						<h5><a href="mailto:'caffecocinacomments@gmail.com'">CaffeCocinaComments @gmail.com</a></h5>
					</div>
				</div>
			</div>


			<div class='businessCard'>
			<!-- Business Card -->
				<h5 class='cardInfo'>Directions</h5>			
				<!-- Phone Number -->
				<div class='row'>
					<div class='col-xs-3 cardLabel'>
						<h5>Address:</h5>
					</div>
					<div class='col-xs-8 cardContent'>
						<h5>580 NW Finn Hill Rd</h5>
						<h5>Poulsbo, WA 98370</h5>
					</div>
				</div>
			</div>

			<div class='businessCard'>
				<!-- Business Card -->
				<h5 class='cardInfo'>Social Media</h5>			
					<!-- Phone Number -->
					<div class='row'>
						<div class='socialMediaIcon'>
							<a href="https://twitter.com/share" data-size="large" data-count="none"><img src='/assets/images/CoffeeCup_Twitter.png'></a>
						</div>	
						<div class='socialMediaIcon'>
							<a href="http://www.facebook.com/poulsbocaffecocina" data-size="large" data-count="none"><img src='/assets/images/CoffeeCup_Facebook.png'></a>
						</div>	
						<div class='socialMediaIcon'>
							<a href="https://instagram.com/caffe_cocina" data-size="large" data-count="none"><img src='/assets/images/CoffeeCup_Instagram.png'></a>
						</div>
						<div class='socialMediaIcon'>
							<a href="http://www.yelp.com/biz/caffe-cocina-poulsbo" data-size="large" data-count="none"><img src='/assets/images/CoffeeCup_Yelp.png'></a>
						</div>	
						<div class='socialMediaIcon'>
							<a href="mailto:'caffecocinacomments@gmail.com" data-size="large" data-count="none"><img src='/assets/images/CoffeeCup_Email.png'></a>
						</div>		
						<div class='socialMediaIcon'>
							<a href="#" data-size="large" data-count="none"><img src='/assets/images/CoffeeCup_GooglePlus.png'></a>
						</div>		
					</div>
			</div>

		</div>

			<!-- Right Column -->
		<div class='col-xs-6 col-xs-offset-2 col-md-offset-1 map'>
			<iframe width="500" 
					height="400" 
					frameborder="5" 
					style="border:5"
					src="https://www.google.com/maps/embed/v1/place?q=580+NW+Finn+Hill+Rd,+Poulsbo,+WA,+United+States&key=AIzaSyC_96wd3aHaxJO3YefMZr5wiw2vZxOmeq0">
			</iframe>
		</div>
		<!-- End Right Column -->





<!-- END Main body Content -->



</body>
</html>