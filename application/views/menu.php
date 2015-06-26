<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<div class='row'>&nbsp;</div>
<!-- Main Body Content -->

<div class='allMenus'>
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

	  	<!-- Drinks Menu -->
	    	<div class="item active"> 		
	      		<div class="carousel-caption">
	        		<h5><span class='activeMenu'>Drinks</span>&nbsp;&nbsp;Breakfast&nbsp;&nbsp;Lunch&nbsp;&nbsp;Treats</h5>
	      		</div>
	      		<div class='centerText'>
					<div class='contentDiv'>
						<div class='row'>
							<fieldset class='fieldsetting'>
								<legend class='legendColor'><h2>Hot Drinks</h2></legend>
									<table>
										<thead>
											<tr>
												<th></th>
												<th class='centerText whiteRow'><h5>8oz</h5></th>
												<th class='centerText whiteRow'><h5>12oz</h5></th>
												<th class='centerText whiteRow'><h5>16oz</h5></th>
												<th class='centerText whiteRow'><h5>20oz</h5></th>
											</tr>
										</thead>
										<tbody>
<?php 										foreach($allHotDrinks AS $hotDrink){ 	?>
												<tr>
													<td class='drinkTitles'><h4 class='lunchTitles'><?= $hotDrink['title'] ?></h4></td>
<?php 												if($hotDrink['price_8oz'] != '0.00'){		?>
														<td class='drinkPrices'>$<?= number_format((float)$hotDrink['price_8oz'], 2, '.', '') ?></td>
<?php 												}
													else{		?>
														<td></td>
<?php 												}			?>
													<td class='drinkPrices'>$<?= number_format((float)$hotDrink['price_12oz'], 2, '.', '') ?></td>
													<td class='drinkPrices'>$<?= number_format((float)$hotDrink['price_16oz'], 2, '.', '') ?></td>
													<td class='drinkPrices'>$<?= number_format((float)$hotDrink['price_20oz'], 2, '.', '') ?></td>
												</tr>
<?php 							} 		?>
											</tbody>
									</table>
							</fieldset>
						</div>
					</div>
				</div>
	    	</div>
	    <!-- Breakfast Menu -->
	    	<div class="item">	
	      		<div class="carousel-caption">
	        		<h5>Drinks&nbsp;&nbsp;<span class='activeMenu'>Breakfast</span>&nbsp;&nbsp;Lunch&nbsp;&nbsp;Treats</h5>
	      		</div>
	      		<div class='centerText'>
					<div class='contentDiv'>
						<div class='row'>
							<fieldset class='fieldsetting'>
								<legend class='legendColor'><h2>Breakfast</h2></legend>
<?php 								foreach($allBreakfast AS $breakfast){		?>						
										<div class='row'>
											<h4 class='lunchTitles'><?= $breakfast['title'] ?>&nbsp;&nbsp;-&nbsp;<?= $breakfast['price'] ?></h4>
											<h5 class='specialtyDescription'><?= $breakfast['description'] ?></h5>
										</div>
<?php 									} 		?>
							</fieldset>
						</div>
					</div>
				</div>
	    	</div>
	    <!-- Lunch Menu -->
	    	<div class="item">
	      		<div class="carousel-caption">
	        		<h5>Drinks&nbsp;&nbsp;Breakfast&nbsp;&nbsp;<span class='activeMenu'>Lunch</span>&nbsp;&nbsp;Treats</h5>
	      		</div>
	      		<div class='centerText'>
					<div class='contentDiv'>
					
						<!-- Specialties -->
						<div class='row'>
							<fieldset class='fieldsetting'>
								<legend class='legendColor'><h2>Specialties</h2></legend>
<?php								foreach($allSpecialties AS $specialty){		?>
										<div class='row'>
											<h4 class='lunchTitles'><?= $specialty['title'] ?>&nbsp;&nbsp;-&nbsp;</h4><h5 class='lunchPrices'><?= $specialty['price'] ?></h5>
											<h5 class='specialtyDescription'><?= $specialty['description'] ?></h5>
										</div>
<?php 										
									} 		?>
							</fieldset>
						</div>

						<!-- Sandwiches -->
						<div class='row'>
							<fieldset class='fieldsetting'>
								<legend class='legendColor'><h2 class='legendColor'>Sandwiches</h2><h5 class='legendNote'>Deli Sanwiches&nbsp;-&nbsp;5&nbsp;&nbsp;&nbsp;Foot Longs&nbsp;-&nbsp;7</h5></legend>
									<h5 class='menuNote'>One Bread, One Meat, One Veggie, One Cheese, One Spread</h5>
									<h5 class='menuNote'>Additional Meats - 2, Veggies/Cheeses/Spreads - 1</h5>
<?php								foreach($allFixingCategories AS $fixingCategory){		?>
										<div class='row'>
											<h4 class='lunchTitles'><?= $fixingCategory ?></h4>
											<h5 class='specialtyDescription'>
<?php 											foreach($allFixings AS $fixing){	
													if($fixing['category'] == $fixingCategory){		?>
														<?= $fixing['type'] ?>,
<?php												}
	
	 											}		?>
											</h5>
										</div>
<?php 										
									} 		?>
							</fieldset>
						</div>

						<!-- Burgers -->
						<div class='row'>
							<fieldset class='fieldsetting'>
								<legend class='legendColor'><h2 class='legendColor'>Burgers</h2><h5 class='legendNote'>Choice of Fries or Chips & Salsa</h5></legend>
<?php								foreach($allBurgers AS $burger){		?>
										<div class='row'>
											<h4 class='lunchTitles'><?= $burger['title'] ?>&nbsp;&nbsp;&nbsp;</h4><h5 class='lunchPrices'>&nbsp;-&nbsp;<?= $burger['price'] ?></h5>
											<h5 class='specialtyDescription'><?= $burger['description'] ?></h5>
										</div>
<?php 										
									} 		?>
							</fieldset>
						</div>

						<!-- Salads -->
						<div class='row'>
							<fieldset class='fieldsetting'>
								<legend class='legendColor'><h2 class='legendColor'>Salads</h2><h5 class='legendNote'>Make any Salad a Wrap $1</h5></legend>
<?php								foreach($allSalads AS $salad){		?>
										<div class='row'>
											<h4 class='lunchTitles'><?= $salad['title'] ?>&nbsp;&nbsp;&nbsp;</h4><h5 class='lunchPrices'>Full&nbsp;-&nbsp;<?= $salad['full_price'] ?>&nbsp;&nbsp;&nbsp;Half&nbsp;-&nbsp;<?= $salad['half_price'] ?></h5>
											<h5 class='specialtyDescription'><?= $salad['description'] ?></h5>
										</div>
<?php 										
									} 		?>
							</fieldset>
						</div>

						<!-- Soups -->
						<div class='row'>
							<fieldset class='fieldsetting'>
								<legend class='legendColor'><h2 class='legendColor'>Soups</h2><h5 class='legendNote'>Cup&nbsp;-&nbsp;12oz&nbsp;&nbsp;&nbsp;&nbsp;Bowl&nbsp;-&nbsp;16oz</h5></legend>
<?php								foreach($allSoups AS $soup){		?>
										<div class='row'>
											<h4 class='lunchTitles'><?= $soup['title'] ?>&nbsp;&nbsp;-&nbsp;</h4><h5 class='lunchPrices'>Bowl&nbsp;-&nbsp;<?= $soup['full_price'] ?>&nbsp;&nbsp;&nbsp;Cup&nbsp;-&nbsp;<?= $soup['half_price'] ?></h5>
											<h5 class='specialtyDescription'><?= $soup['description'] ?></h5>
										</div>
<?php 										
									} 		?>
							</fieldset>
						</div>

						<!-- Kids Items -->
						<div class='row'>
							<fieldset class='fieldsetting'>
								<legend class='legendColor'><h2 class='legendColor'>Kids Items</h2><h5 class='legendNote'>Served with Small Fries or Apple Slices</h5></legend>
<?php								foreach($allKids AS $kid){		?>
										<div class='row'>
											<h4 class='lunchTitles'><?= $kid['title'] ?>&nbsp;&nbsp;-&nbsp;</h4><h5 class='lunchPrices'><?= $kid['price'] ?></h5>
											<h5 class='specialtyDescription'><?= $kid['description'] ?></h5>
										</div>
<?php 										
									} 		?>
							</fieldset>
						</div>

					</div>
				</div>
	  		</div>
	  	<!-- Treats/Snacks Menu -->
	  		<div class="item">
	      		<div class="carousel-caption">
	        		<h5>Drinks&nbsp;&nbsp;Breakfast&nbsp;&nbsp;Lunch&nbsp;&nbsp;<span class='activeMenu'>Treats</span></h5>
	      		</div>
	      		<div class='centerText'>
					<div class='contentDiv'>
						<div class='row'>
							<fieldset class='fieldsetting'>
								<legend class='legendColor'><h2>Treats</h2></legend>
								<div class='row whiteRow'>
									<h6 class='centerText'>Click Items For Ingredients</h7>
								</div>
								<table id='treatTable'>
<?php 							foreach($allTreats AS $treat){   	?>
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
								<tr id='tr<?=$treat['id']?>'><td class='tableDescription'><?=$treat['description']?></td></tr>
	<?php 						}	?>
								</table>
						</fieldsetting>
						</div>
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



