<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="/assets/css/menu.css">
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
						<li class='navLinksDropdown'><a class='navLinksDropdownColor' href='/menu'><span class='currentDropdown'>Caffe Menu<i class="fa fa-coffee"></i></span></a></li>
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
	
	
 
<div class='col-xs-10 col-xs-offset-1'>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	 	<!-- Indicators -->
	 	<ol class="carousel-indicators">
	    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	  	</ol>

	  	<!-- Wrapper for slides -->
	  	<div class="carousel-inner" role="listbox">
	    	<div class="item active">
	     		
	      		<div class="carousel-caption">
	        		<h5><span class='activeMenu'>Drinks</span>&nbsp;&nbsp;Breakfast&nbsp;&nbsp;Lunch&nbsp;&nbsp;Treats</h5>
	      		</div>
	      		<div class='centerText'>
					<!-- Blank Blackboard -->
					<div class='contentDiv'>
						<h2 class='centerText menuHeaderSpace'><span class='underlineHeader'>Drinks</span></h2>
						<div class='row'>
							<fieldset class='fieldsetting'>
								<legend class='legendColor'><h3>Hot Drinks</h3></legend>
									<table>
<?php 									foreach($allHotDrinks AS $hotDrink){ 	?>
											<tr>
												<td class='drinkTitles'><h4 class='lunchTitles'><?= $hotDrink['title'] ?></h4></td>
<?php 											if($hotDrink['price_8oz'] != '0.00'){		?>
													<td class='drinkPrices'>$<?= number_format((float)$hotDrink['price_8oz'], 2, '.', '') ?></td>
<?php 											}
												else{		?>
													<td></td>
<?php 											}			?>
												<td class='drinkPrices'>$<?= number_format((float)$hotDrink['price_12oz'], 2, '.', '') ?></td>
												<td class='drinkPrices'>$<?= number_format((float)$hotDrink['price_16oz'], 2, '.', '') ?></td>
												<td class='drinkPrices'>$<?= number_format((float)$hotDrink['price_20oz'], 2, '.', '') ?></td>
											</tr>
<?php 							} 		?>
									</table>
							</fieldset>
						</div>
					</div>
				</div>
	    	</div>

	    	<div class="item">	
	      		<div class="carousel-caption">
	        		<h5>Drinks&nbsp;&nbsp;<span class='activeMenu'>Breakfast</span>&nbsp;&nbsp;Lunch&nbsp;&nbsp;Treats</h5>
	      		</div>
	      		<div class='centerText'>
					<!-- Blank Blackboard -->
					<div class='contentDiv'>
						<h2 class='centerText menuHeaderSpace'><span class='underlineHeader'>Breakfast</span></h2>
						<!-- Breakfast Food Items -->
							<div class='row'>
								<fieldset class='fieldsetting'>
									<legend class='legendColor'><h3>Breakfast</h3></legend>
<?php 									foreach($allBreakfast AS $breakfast){		?>
												
												<div class='row'>
													<h4 class='lunchTitles'><?= $breakfast['title'] ?>&nbsp;&nbsp;-&nbsp;<?= $breakfast['price'] ?></h4>
													<h5 class='specialtyDescription'><?= $breakfast['description'] ?></h5>
												</div>
<?php 									} 		?>
								</fieldset>
							</div>
							<!-- END Breakfast Food Items -->
					</div>
				</div>
	    	</div>
	    	<div class="item">
	      		<div class="carousel-caption">
	        		<h5>Drinks&nbsp;&nbsp;Breakfast&nbsp;&nbsp;<span class='activeMenu'>Lunch</span>&nbsp;&nbsp;Treats</h5>
	      		</div>
	      		<div class='centerText'>
					<!-- Blank Blackboard -->
					<div class='contentDiv'>
							<h2 class='centerText menuHeaderSpace'><span class='underlineHeader'>Lunch</span></h2>
							<!-- Specialty Food Items -->
							<div class='row'>
								<fieldset class='fieldsetting'>
									<legend class='legendColor'><h3>Specialties</h3></legend>
<?php 									$color = 'orange';
										foreach($allSpecialties AS $specialty){		
											if($color == 'white'){
?>
												<div class='row whiteRow'>
													<h4 class='lunchTitles'><?= $specialty['title'] ?>&nbsp;&nbsp;-&nbsp;<?= $specialty['price'] ?></h4>
													<h5 class='specialtyDescription'><?= $specialty['description'] ?></h5>
												</div>
<?php 											$color = 'orange';
											}
											else{	?>	
												<div class='row'>
													<h4 class='lunchTitles'><?= $specialty['title'] ?>&nbsp;&nbsp;-&nbsp;<?= $specialty['price'] ?></h4>
													<h5 class='specialtyDescription'><?= $specialty['description'] ?></h5>
												</div>
<?php 										$color = 'white';
											} 
										} 		?>
								</fieldset>
							</div>
							<!-- END Specialty Food Items -->
					</div>
				</div>
	  		</div>
	  		<!-- Treats/Snacks Items -->
	  		<div class="item">
	      		<div class="carousel-caption">
	        		<h5>Drinks&nbsp;&nbsp;Breakfast&nbsp;&nbsp;Lunch&nbsp;&nbsp;<span class='activeMenu'>Treats</span></h5>
	      		</div>
	      		<div class='centerText'>
					<!-- Blank Blackboard -->
					<div class='contentDiv'>
						<div class='row'>	
							<h2 class='centerText menuHeaderSpace'><span class='underlineHeader'>Treats</span></h2>
						</div>
						<div class='row'>
							<table id='treatTable'>
<?php 						foreach($allTreats AS $treat){   	?>
							<script type="text/javascript">
									$(document).ready(function(){
										$('#tr<?=$treat['id']?>').hide();
										$('#row<?=$treat['id']?>').click(function(){
											// alert('<?=$treat['description']?>');
											$('#tr<?=$treat['id']?>').fadeIn();
											setTimeout(function(){
												$('#tr<?=$treat['id']?>').fadeOut();
											}, 2000);
										});
									})
							</script>
							<tr id='row<?=$treat['id']?>'>
								<td class='tableTitle'><h4><?= $treat['title'] ?>&nbsp;&nbsp;&nbsp;&nbsp;</h4></td>
								<td class='tablePrice'><h4><span class='whiteRow'>.............................</span>&nbsp;&nbsp;&nbsp;&nbsp;$<?= number_format((float)$treat['price'], 2, '.', '') ?></h4></td>
							</tr>
							<tr id='tr<?=$treat['id']?>'><td><?=$treat['description']?></td></tr>
<?php 						}	?>
							</table>
						</div>
						<h6 class='centerText'>Click Items For Ingredients</h7>
					</div>
				</div>
	  		</div>
	  		<!-- END Treats/Snacks Items -->
	  	<!-- Controls -->
	  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  	</a>
	  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
	  	</a>
	</div>

</div>



<!-- END Main body Content -->



</body>
</html>


<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
var_dump($allBreakfast);
?>

