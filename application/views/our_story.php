<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="/assets/css/ourstory.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
				
				<li class='dropdown navLinks navLinkBack navLinkOn'>
					<a href="#" class='dropdown-toggle listLinkColorOn' data-toggle='dropdown' role='button' aria-expanded='false'>About</span><span class="caret"></span></a>
					<ul class='dropdown-menu' role='list'>
						<li class='navLinksDropdown '><a class='navLinksDropdownColor' href='/ourstory'><span class='currentDropdown'>Our Story <i class="fa fa-coffee"></i></span></a></li>
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
				<li class='navLinks navLinkBack navLinkOff'><a class='navLinkColorOff' href='/contact'>Contact</a></li>

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
	<div class='row'>
		<div class='col-xs-12 col-md-5 col-md-offset-1'>
			
			<div class='contentDiv'>
				<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					Caffe Cocina is a great local coffehouse located on Finn Hill in Poulsbo. Fast drive-thru service as well as indoor and patio seating. Caffe Cocina carries ZOKA's delicious organic drip coffee, espresso and loose-leaf tea served with amazingly fresh pasteries for your morning commute. For your convienience , you can call and place your order in advance or park behind the caffe.
				</p>
	      		<p> 
	      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
	      			Come inside for our FREE WIFI and visit with our friendly staff, including our chef! Lunch is served from 11-4 M-F with homemade family recipes including daily-made soups, cold/hot sandwiches, salads, cut-to-order french fries/onion rings and much more! Daily Lunch Specials! Enjoy your meal with an ice cold beer or a glass of wine/champagne.
	      		</p>
	      		<p> 
	      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	      			Come and check out Poulsbo's "Hidden Treasures!"
	      		</p>
			</div>

			<div class='contentDiv'>
				<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					All of out Baristas are professionally trained through Zoka Coffee Roasters and Tea Company!
				</p>
				<div id='zokaCoffee'>
					<img src="/assets/images/zokacoffee.png">
				</div>
			</div>
	</div>

	<!-- Instagram Feed -->
    <div class='col-xs-12 col-md-5 col-md-offset-1'>
      <h3 id='instaFeedHeader'>Instagram Feed</h3>
      <div id='instaFeed'>
        <!-- SnapWidget -->
        <iframe src="http://snapwidget.com/sl/?u=Y2FmZmVfY29jaW5hfGlufDQwMHwzfDN8fHllc3w1fG5vbmV8b25TdGFydHx5ZXN8bm8=&ve=080615" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:500px; height:500px"></iframe>
      </div>
    <!-- END Instagram Feed -->
<!-- END Main body Content -->



</body>
</html>