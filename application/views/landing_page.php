<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="/assets/css/landing_page.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="/assets/js/JQueryLib.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#loginForm').hide();

			$('#logoDiv').click(function(){
				$('#loginForm').show();
			})
		})


	</script>
</head>
<body id='body'>



<!-- HEADER/NAVBAR -->
	<div class='col-xs-12 navbarHeader navbar-default'>
		
		<div class='col-xs-2 navbarLogo' data-toggle='collapse' data-target='#theList'>
		</div>

	
		
		<div class='col-xs-5 col-xs-offset-1 navbarLink navbarBack collapse navbar-collapse' id='theList'>
			<ul class='centerItem listItems'>
				<li class='navLinks navLinkBack navLinkOn'><a class='navLinkColorOn' href='/home'>Home</a></li>
				
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
		<img id='welcomeImage' src="/assets/images/cocina_welcome.jpg">
	</div>
	<div class='row'>
		<div class='centerMargin' id='logoDiv'>
			<img id='logo_black' src="/assets/images/logo_black.jpg">
		</div>
	</div>

	<div class='row centerText' id='contactInfo'>
		<h4>360-697-2004</h4>
		<h4>580 NW Finn Hill Rd</h4>
		<h4>Poulsbo, WA 98370</h4>
		<h4>caffecocinacomments@gmail.com</h4>
	</div>
<!-- END Main body Content -->
<br><br><br><br><br><br><br>

			
	<div class='landingFooter col-xs-12'>
		<div class='loginDiv' id='loginForm'>
			<form  action='/login' method='POST'>
				<label>Admin:</label>
				<input type='text' name='username' placeholder='Account Name'>
				<label>Password:</label>
				<input type='password' name='password' placeholder='Account Password'>
				<input type='submit' class='btn-success' value='Enter'>
			</form>
		</div>
	</div>


</body>
</html>