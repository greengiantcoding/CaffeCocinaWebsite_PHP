<!doctype HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	 		<li class='navbarPill navbarOn'><a href="#" class='navbarLinksOn'>Photos</a></li>
	  		<li class='navbarPill navbarOff'><a href="#" class='navbarLinks'>Reviews</a></li>
	  		<li class='navbarPill navbarOff'><a href="/admin_menus" class='navbarLinks'>Menus</a></li>
			<li class='navbarPill navbarOff navbar-right' id='signOut'><a href="/home" class='navbarLinks'>Log Out</a></li>
		</ul>
	</div>
	<!-- END Admin Navigation Bar -->

	<!-- Main Body Content -->
		
		<!-- FORM: Add New Photo -->
		<fieldset class='menuFormLegend'>
			<legend class='legendOrange'>Add New Photo To Album</legend>
			<form class="form-horizontal" action='/add_photo' method='POST' enctype="multipart/form-data"> 
				<div class="form-group">
			    	<label for="file_name" class="col-sm-4 control-label">File Name:</label>
			    	<div class="col-sm-6">
			      		<input type="text" class="form-control" name='file_name' id="file_name" placeholder="File Name">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<div class="col-sm-offset-4 col-sm-2">
			      		<button type="submit" class="btn btn-default">Add Photo</button>
			    	</div>
			  	</div>
			</form>
		</fieldset>

		<!-- Display All Photos -->
<?php 	foreach($allPhotos AS $photo){	 ?>
		<div class='col-xs-6 col-md-2 photoFrame'>
			<img src="./uploads/<?= $photo['file_name'] ?>" class='photoRoll'>
			<form action='/delete_photo' method='POST'>
				<input type='hidden' name='id' value='<?= intval($photo['id']) ?>'>
				<button type='submit' class='photoBtns'><i class="fa fa-trash-o"></i>&nbsp;&nbsp;DELETE&nbsp;&nbsp;<i class="fa fa-trash-o"></i></button>
			</form>
		</div>
<?php  	}		?>
		<!-- END Display All Photos -->

	<!-- END Main Body Content -->

</body>
</html>

