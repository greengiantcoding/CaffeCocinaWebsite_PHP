<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="/assets/css/under_construction.css">
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
				<li class='navLinks navLinkBack navLinkOff'><a class='navLinkColorOff' href='/contact'>Contact</a></li>

				<li class='navLinks navLinkBack navLinkOff'><a class='navLinkColorOff' href='/review'>Reviews</a></li>
				<li class='navLinks navLinkBack navLinkOn'><a class='navLinkColorOn' href='/merchandise'>Store</a></li>
			</ul>
		</div>
		<button class='pull-right toggleBox collapsed navbar-toggle navbar-collapse' data-toggle='collapse' data-target='#theList'>
        <span class="fa fa-bars fa-lg"></span>
		</button>
	</div>
<!-- END HEADER/NAVBAR -->

<!-- Main Body Content -->
	
		

<!-- MAIN BODY OF LANDING PAGE -->
  <div class='col-xs-12' id='constructionNotice'>
    <h1 class='centerText'> Merchandise *Under Construction* Stay Tuned</h1>
  </div>
  <!-- END MAIN BODY OF LANDING PAGE -->

    <br><br><br><br><br>
<div class='col-xs-6 col-xs-offset-3' id='coffeeDrip'>  
  <div class="bg">

    <div class="centered pot">
      <div class="fill"></div>
      <div class="pot-lines">
        <div class="tick"></div>
        <div class="tick"></div>
        <div class="tick"></div>
        <div class="tick"></div>
        <div class="tick"></div>
        <div class="tick"></div>
        <div class="tick"></div>
        <div class="tick"></div>
      </div>
    </div>
    <div class="centered pot-lip"></div>
    <div class="centered pot-bar"></div>
    <div class="centered pot-handle"></div>


    <div class="centered plate"></div>
    <div class="centered plate" id="inner"></div>
    <div class="centered cup-handle"></div>
    <div class="centered cup">Coming Soon!</div>
    <div class="centered cup-bottom"></div>

    <div class="centered coffee">
      <div class="ripple"></div>
    </div>

    <div class="centered pour">
      <div class="stripes"></div>
      <div class="stripes"></div>
      <div class="stripes"></div>
    </div>
    <div>
      <div class="centered splash"></div>
      <div class="centered splash"></div>
      <div class="centered splash"></div>
    </div>

  </div>
</div>
  



<!-- END Main body Content -->



</body>
</html>