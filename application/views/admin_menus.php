<!doctype HTML>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/admin_dashboard.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="/assets/js/JQueryLib.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
</head>
<body id='body'>
	<!-- Admin Navigation Bar -->
	<div class='nav navbar' id='navbar'>
		<ul class="nav nav-pills">
	 		<li class='navbarPill navbarOff'><a href="/admin_dashboard" class='navbarLinks'>Photos</a></li>
	  		<li class='navbarPill navbarOff'><a href="#" class='navbarLinks'>Reviews</a></li>
	  		<li class='navbarPill navbarOn'><a href="/admin_menus" class='navbarLinksOn'>Menus</a></li>
			<li class='navbarPill navbarOff navbar-right' id='signOut'><a href="/home" class='navbarLinks'>Log Out</a></li>
		</ul>
	</div>
	<!-- END Admin Navigation Bar -->

	<!-- Main Body Content -->

		<!-- FORM: Add New Treat/Snack Item -->
		<fieldset class='menuFormLegend'>
			<legend class='legendOrange'>Add New Treat/Snack Item</legend>
		<form class="form-horizontal menuForm" action='/new_treat' method='POST'>
		  	<div class="form-group">
		    	<label for="title" class="control-label menuFormLabel">Item Name:</label>		    	
		      	<input type="text" class="menuFormInput" name='title' id="title" placeholder="&nbsp;&nbsp;Enter name of treat/snack here...">
		  	</div>
		  	<div class="form-group">
		    	<label for="description" class="control-label menuFormLabel">Item Description:</label>
		      	<textarea class="menuFormTextarea" name='description' id="description" placeholder='&nbsp;&nbsp;Enter description/ingredients of treat/snack here.... &nbsp;(optional)'></textarea>
		  	</div>
		  	<div class='form-group'>
		  		<label for='price' class="control-label menuFormLabel">Item Price:</label>
		  		<input type='number' step='0.01' min='0.01' class="menuFormInput" name='price' id='price' placeholder='&nbsp;&nbsp;Enter price here....  $-.--'>
		  	</div>
		  	<div class="form-group">
		      	<button type="submit" class="formButton btn btn-default"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add New Treat To Menu&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></button>
		  	</div>
		</form>	
		</fieldset>
		<!-- END FORM: Add New Treat/Snack Item -->	

		<!-- FORM: Add New Specialty Item -->
		<fieldset class='menuFormLegend'>
			<legend class='legendOrange'>Add New Specialty Food Item</legend>
		<form class="form-horizontal menuForm" action='/new_specialty' method='POST'>
		  	<div class="form-group">
		    	<label for="title" class="control-label menuFormLabel">Item Name:</label>
		      		<input type="text" class="menuFormInput" name='title' id="title" placeholder="&nbsp;&nbsp;Enter name of treat/snack here...">
		  	</div>
		  	<div class="form-group">
		    	<label for="description" class="control-label menuFormLabel">Item Description:</label>
		      		<textarea class="menuFormTextarea" name='description' id="description" placeholder='&nbsp;&nbsp;Enter description/ingredients of treat/snack here.... &nbsp;(optional)'></textarea>
		  	</div>
		  	<div class='form-group'>
		  		<label for='price' class="control-label menuFormLabel">Item Price:</label>
		  		<input type='number' step='0.01' min='0.01' class="menuFormInput" name='price' id='price' placeholder='&nbsp;&nbsp;Enter price here....  $-.--'>
		  	</div>
		  	<div class="form-group">
		      	<button type="submit" class="formButton btn btn-default"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add New Specialty Item To Menu&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></button>
		  	</div>
		</form>	
		</fieldset>	
		<!-- END FORM: Add New Specialty Item -->

		<!-- FORM: Add New Breakfast Item -->
		<fieldset class='menuFormLegend'>
			<legend class='legendOrange'>Add New Breakfast Food Item</legend>
		<form class="form-horizontal menuForm" action='/new_breakfast' method='POST'>
		  	<div class="form-group">
		    	<label for="title" class="control-label menuFormLabel">Item Name:</label>
		      		<input type="text" class="menuFormInput" name='title' id="title" placeholder="&nbsp;&nbsp;Enter name of breakfast item here...">
		  	</div>
		  	<div class="form-group">
		    	<label for="description" class="control-label menuFormLabel">Item Description:</label>
		      		<textarea class="menuFormTextarea" name='description' id="description" placeholder='&nbsp;&nbsp;Enter description/ingredients of brekafast item here.... &nbsp;(optional)'></textarea>
		  	</div>
		  	<div class='form-group'>
		  		<label for='price' class="control-label menuFormLabel">Item Price:</label>
		  		<input type='number' step='0.01' min='0.01' class="menuFormInput" name='price' id='price' placeholder='&nbsp;&nbsp;Enter price here....  $-.--'>
		  	</div>
		  	<div class="form-group">
		      	<button type="submit" class="formButton btn btn-default"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add New Breakfast Item To Menu&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></button>
		  	</div>
		</form>	
		</fieldset>	
		<!-- END FORM: Add New Breakfast Item -->

		<!-- FORM: Add New Hot Drink -->
		<fieldset class='menuFormLegend'>
			<legend class='legendOrange'>Add New Hot Drink Item</legend>
		<form class="form-horizontal menuForm" action='/new_hot_drink' method='POST'>
		  	<div class="form-group">
		    	<label for="title" class="control-label menuFormLabel">Drink Name:</label>
		      		<input type="text" class="menuFormInput" name='title' id="title" placeholder="&nbsp;&nbsp;Enter name of hot drink here...">
		  	</div>
		  	<div class="form-group">
		    	<label for="description" class="control-label menuFormLabel">Drink Description:</label>
		      		<textarea class="menuFormTextarea" name='description' id="description" placeholder='&nbsp;&nbsp;Enter description/ingredients of hot drink here.... &nbsp;(optional)'></textarea>
		  	</div>
		  	<div class='form-group'>
		  		<label for='price8' class="control-label menuFormLabel">8oz Price:</label>
		  		<input type='number' step='0.01' min='0.01' class="menuFormInput" name='price_8oz' id='price8' placeholder='&nbsp;&nbsp;Enter 8oz price here....  $-.--'>
		  	</div>
		  	<div class='form-group'>
		  		<label for='price12' class="control-label menuFormLabel">12oz Price:</label>
		  		<input type='number' step='0.01' min='0.01' class="menuFormInput" name='price_12oz' id='price12' placeholder='&nbsp;&nbsp;Enter 12oz price here....  $-.--'>
		  	</div>
		  	<div class='form-group'>
		  		<label for='price16' class="control-label menuFormLabel">16oz Price:</label>
		  		<input type='number' step='0.01' min='0.01' class="menuFormInput" name='price_16oz' id='price16' placeholder='&nbsp;&nbsp;Enter 16oz price here....  $-.--'>
		  	</div>
		  	<div class='form-group'>
		  		<label for='price20' class="control-label menuFormLabel">20oz Price:</label>
		  		<input type='number' step='0.01' min='0.01' class="menuFormInput" name='price_20oz' id='price20' placeholder='&nbsp;&nbsp;Enter 20oz price here....  $-.--'>
		  	</div>
		  	<div class="form-group">
		      	<button type="submit" class="formButton btn btn-default"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add New Hot Drink To Menu&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></button>
		  	</div>
		</form>	
		</fieldset>	
		<!-- END FORM: Add New Hot Drink -->


	<!-- END Main Body Content -->

</body>
</html>

<br><br><br><br><br><br><br><br><br><br>
<?php
// var_dump()
?>