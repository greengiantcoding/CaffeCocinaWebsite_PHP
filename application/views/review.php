<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="/assets/css/review.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="/assets/js/JQueryLib.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){
				
			// SET FOCUS TO AUTHOR INPUT
			$('#review_author').focus();

			// BACKBOARD HEIGHT SET FOR SCREEN DIMENSIONS
			var h = $(window).height() * 0.80;
				$('.backboard').css('min-height', h);

			// Cafe Ratings

				// Rating 1
				$('#rating1').click(function(){
					$('#rating1').removeClass('blackCup').addClass('redCup');
					$('#rating2').removeClass('redCup').addClass('blackCup');
					$('#rating3').removeClass('redCup').addClass('blackCup');
					$('#rating4').removeClass('redCup').addClass('blackCup');
					$('#rating5').removeClass('redCup').addClass('blackCup');
					$('#cafeRating').attr('value', 1);
  					return false;
				})

				// Rating 2
				$('#rating2').click(function(){
					$('#rating1').removeClass('blackCup').addClass('redCup');
					$('#rating2').removeClass('blackCup').addClass('redCup');
					$('#rating3').removeClass('redCup').addClass('blackCup');
					$('#rating4').removeClass('redCup').addClass('blackCup');
					$('#rating5').removeClass('redCup').addClass('blackCup');
					$('#cafeRating').attr('value', 2);
  					return false;
				})

				// Rating 3
				$('#rating3').click(function(){
					$('#rating1').removeClass('blackCup').addClass('redCup');
					$('#rating2').removeClass('blackCup').addClass('redCup');
					$('#rating3').removeClass('blackCup').addClass('redCup');
					$('#rating4').removeClass('redCup').addClass('blackCup');
					$('#rating5').removeClass('redCup').addClass('blackCup');
					$('#cafeRating').attr('value', 3);
  					return false;
				})

				// Rating 4
				$('#rating4').click(function(){
					$('#rating1').removeClass('blackCup').addClass('redCup');
					$('#rating2').removeClass('blackCup').addClass('redCup');
					$('#rating3').removeClass('blackCup').addClass('redCup');
					$('#rating4').removeClass('blackCup').addClass('redCup');
					$('#rating5').removeClass('redCup').addClass('blackCup');
					$('#cafeRating').attr('value', 4);
  					return false;
				})

				// Rating 5
				$('#rating5').click(function(){
					$('#rating1').removeClass('blackCup').addClass('redCup');
					$('#rating2').removeClass('blackCup').addClass('redCup');
					$('#rating3').removeClass('blackCup').addClass('redCup');
					$('#rating4').removeClass('blackCup').addClass('redCup');
					$('#rating5').removeClass('blackCup').addClass('redCup');
					$('#cafeRating').attr('value', 5);
  					return false;
				})
		});

	</script>
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

				<li class='navLinks navLinkBack navLinkOn'><a class='navLinkColorOn' href='/review'>Reviews</a></li>
				<li class='navLinks navLinkBack navLinkOff'><a class='navLinkColorOff' href='/merchandise'>Store</a></li>
			</ul>
		</div>
		<button class='pull-right toggleBox collapsed navbar-toggle navbar-collapse' data-toggle='collapse' data-target='#theList'>
        <span class="fa fa-bars fa-lg"></span>
		</button>
	</div>
<!-- END HEADER/NAVBAR -->

<!-- Main Body Content -->
<div class='col-xs-12'>
		

		<!-- Left Review Board -->
		<div class='col-xs-12 col-lg-offset-2' id='reviewBoardLeft'>
			
			<form class="form-horizontal" action='/review/new' method='POST'>
				
				<input type='hidden' name='visible' value='Yes'>
				<div class="form-group">
				    <label for="review_author" class="col-sm-2 control-label">Name:</label>
				    <div class="col-sm-8">
				    	<input type="text" class="form-control" name='author' id="review_author" placeholder="Your name...">
				    </div>
				</div>
				<div class="form-group">
				    <label for="review_content" class="col-sm-2 control-label">Comment:</label>
				    <div class="col-sm-8">
				  	    <textarea class="form-control" name='content' id="review_content" placeholder="Tell us your thoughts...."></textarea>
				    </div>
			 	</div>
			 	<div class='col-xs-6 col-xs-offset-3'>
			  		<i class='fa fa-coffee fa-lg blackCup' id='rating1'></i>
			  		<i class='fa fa-coffee fa-lg blackCup' id='rating2'></i>
			  		<i class='fa fa-coffee fa-lg blackCup' id='rating3'></i>
			  		<i class='fa fa-coffee fa-lg blackCup' id='rating4'></i>
			  		<i class='fa fa-coffee fa-lg blackCup' id='rating5'></i>
					<input type='hidden' id='cafeRating' name='rating' value='-1'>
				</div>
			  	<div class="form-group">
			    	<div class="col-sm-offset-3 col-sm-4">
			     		<button type="submit" class="btn btn-default sendBtn">Send Review</button>
			    	</div>
			  	</div>
			</form>

		</div> 
		<!-- End Left Review Board -->
	

		<!-- Right Review Board -->
		<div class='col-xs-12 ' id='reviewBoardRight'>
<?php
			foreach($allReviews as $review){
?>
			<div class='reviewBlock'>
				<p>
<?php 
					if(intval($review['rating']) > 0){
						for($i = 0; $i < intval($review['rating']); $i++){
?>							<i class='fa fa-coffee fa-lg redCup'></i>
<?php
						}
						for($i = 0; $i < 5-intval($review['rating']); $i++){
?>							<i class='fa fa-coffee fa-lg'></i> 
<?php
						}
					}
					$time = strtotime($review['created_at']);
?>
				</p>
				<h5 class='reviewContent'><?= $review['content'] ?></h5>
				<h5 class='reviewAuthor'>~<?= $review['author'] ?></h5>
				<h5 class='reviewTimeStamp'><?= date('m-d-y',$time) ?></h5>
			</div>
<?php
			}
?>

	
							
							
		</div>
		<!-- End Right Review Board -->
	

	</div>
	


<!-- END Main body Content -->



</body>
</html>

<br><br><br><br><br><br><br>
<?php 

var_dump($allReviews)
?>