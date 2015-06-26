<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="/assets/css/photo_album.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="/assets/js/JQueryLib.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	// JavaScript Document

	$(document).ready(function() {
	  var xPosition;
	  var yPosition;
	  var rotation;
	  var zIdx = 1;

	  var imageStart = function() {
	    $(".imgWrapper").each(function() {
	      var xRandom = (Math.random() + 0.3) * 9;
	      xPosition = xRandom + "%";
	      $(this).css('left', xPosition);

	      var yRandom = (Math.random() + 0.3) * 9;
	      yPosition = yRandom + "%";
	      $(this).css('top', yPosition);

	      $('.images').fadeIn(2000);
	    });
	  };

	  var imageRotation = function() {
	    $(".images").each(function() {
	      rotation = "rotate(" + (Math.random() * -40 + 20) + "deg)";
	      $(this).css('transform', rotation);
	    });
	  }

	  imageStart();
	  imageRotation();
	  setTimeout(function() {
	    imagePosition();
	  }, 100);

	  var imagePosition = function() {
	    $(".imgWrapper").each(function() {
	      var xRandom = Math.random() * 90;
	      xPosition = xRandom + "%";
	      $(this).css('left', xPosition);

	      var yRandom = (Math.random() + 0.1) * 77;
	      yPosition = yRandom + "%";
	      $(this).css('top', yPosition);

	      $('.images').fadeIn(1000);
	    });
	  };

	  // Shuffle element positions on page
	  $("#shuffle").mousedown(function() {
	    $('.images').css('transition', 'all 2.0s ease');
	    $('.imgWrapper').css('position', 'absolute');
	    imagePosition();
	    imageRotation();
	  });

	  $("#sort").mousedown(function() {
	    docWidth = $(document).width() - 1250;
	    docWidth = docWidth / 2;
	    xSet = 0;
	    xSort = docWidth+150;
	    ySet = 0;
	    ySort = 100;
	    sortCounter = 0;
	    console.log(docWidth);
	    $('.imgWrapper').css('transition', 'all 2.0s ease');
	    $(".imgWrapper").each(function() {
	      if (sortCounter == 8) {
	        sortCounter = 0;
	        ySort = ySort + 100;
	        xSort = docWidth+150;
	        xSet = 0;
	      }
	      ySet = ySort + 'px';
	      xSet = xSort + 'px';

	      $(this).css('left', xSet);
	      $(this).css('top', ySet);
	      xSort = xSort + 105;
	      sortCounter++;
	    });
	  });

	  $('.images').mouseenter(function() {
	    $(this).css('transform', 'rotate(0deg)');
	    $(this).css('transition', 'all 1.0s ease, z-index 0.2s ease');
	    $(this).css('z-index', zIdx);
	    zIdx++;

	  });

	  $('.images').mouseleave(function() {
	    rotation = "rotate(" + (Math.random() * -40 + 20) + "deg)";
	    $(this).css('transform', rotation);
	  });

	  $('.imgWrapper').mousedown(function() {
	    $(this).css('transition', 'height 1.0s ease, width 1.0s ease, box-shadow 1.0s ease');
	  });
	  

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
				
				<li class='dropdown navLinks navLinkBack navLinkOn'>
					<a href="#" class='dropdown-toggle listLinkColorOn' data-toggle='dropdown' role='button' aria-expanded='false'>About</span><span class="caret"></span></a>
					<ul class='dropdown-menu' role='list'>
						<li class='navLinksDropdown '><a class='navLinksDropdownColor' href='/ourstory'>Our Story</a></li>
						<li class='navLinksDropdown '><a class='navLinksDropdownColor' href='/photo_album'><span class='currentDropdown'>Photos <i class="fa fa-coffee"></i></span></a></li>
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

<?php  $counter = 1	?>
<?php  foreach($allPhotos AS $photo){		?>
<?php  		if($counter == 4){	?>
				<br>
<?php  		}	 ?>
	<div class='col-xs-6 col-md-3'>
		<img src="./uploads/<?= $photo['file_name'] ?>" class='photoRoll'>
	</div>
<?php  	}	?>

<!-- END Main body Content -->



</body>
</html>