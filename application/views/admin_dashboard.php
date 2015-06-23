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
	 		<li class='navbarPill navbarOn'><a href="#" class='navbarLinksOn'>Photos</a></li>
	  		<li class='navbarPill navbarOff'><a href="#" class='navbarLinks'>Reviews</a></li>
	  		<li class='navbarPill navbarOff'><a href="/admin_menus" class='navbarLinks'>Menus</a></li>
			<li class='navbarPill navbarOff navbar-right' id='signOut'><a href="/home" class='navbarLinks'>Log Out</a></li>
		</ul>
	</div>
	<!-- END Admin Navigation Bar -->

	<!-- Main Body Content -->
		
		<!-- New Photo Form -->
		<div class='row'>
			<form class="form-horizontal" action='/add_photo' method='POST' enctype="multipart/form-data"> 
				<div class="form-group">
			    	<label for="caption" class="col-sm-4 control-label">Caption:</label>
			    	<div class="col-sm-3">
			      		<input type="text" class="form-control" name='caption' id="caption" placeholder="Caption">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="image" class="col-sm-4 control-label">Image:</label>
			    	<div class="col-sm-3">
			    		<input type="file" class="form-control" name='image' id="image">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<div class="col-sm-offset-4 col-sm-2">
			      		<button type="submit" class="btn btn-default">Add Photo</button>
			    	</div>
			  	</div>
			</form>
		</div>
		<!-- END New Photo Form -->


		<!-- Display All Photos -->
<?php 	foreach($allPhotos AS $photo){
echo '<img src="data:image/jpeg;base64,' . base64_encode( $photo['image'] ) . '" />';
}
?>
		<!-- END Display All Photos -->

	<!-- END Main Body Content -->

</body>
</html>

<br><br><br><br><br><br><br><br><br><br>
<?php
var_dump($allPhotos)
?>