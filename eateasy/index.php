<?php include("inc/header.php"); ?>
<div class="banner">
	<div class="title">
		Welcome to EatEasy !
	</div>
	<div class="col-md-offset-3 col-md-6">
		<div class="content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi
		</div>
		<button class="btn btn-order">Order Now &nbsp; &nbsp;<i class="fa fa-caret-right"></i></button>
	</div>
</div>
<div class="about">
	<div class="col-md-4 col-md-offset-1">
		<div class="details">
			<b class="titletop">LOREM</b>
			<b class="titlebottom red">IPSUM</b>
			<b class="titlebottom darkgreen">DOLOR</b>

			<div class="hrline"></div>
			<div class="text">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute 
			</div>
			<div class="highlight red">
				Everyday 6:00 AM to 6:00 PM
			</div>
		</div>
	</div>
	<div class="col-md-4 col-md-offset-2">
		<div class="card r-right">
			<div class="card r-left">
				<img src="img/ls.jpg">
			</div>
		</div>
	</div>
</div>

<div class="items">
	<div class="row">
		<div class="col-md-3">
			<img src="img/1.jpg" class="img-responsive">
			<div class="circle">Burger</div>
		</div>
		<div class="col-md-3">
			<img src="img/4.jpg" class="img-responsive">
			<div class="circle">CupCake</div>
		</div>
		<div class="col-md-3">
			<img src="img/6.jpg" class="img-responsive">
			<div class="circle">Khana</div>
		</div>
		<div class="col-md-3">
			<img src="img/2.jpg" class="img-responsive">
			<div class="circle">Chicken</div>
		</div>
	</div>
</div>
<div class="motto">
	<div class="col-md-4">
		<b>Delivery in Time</b><br>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt
	</div>
	<div class="col-md-4">
		<b>Lorem Ipsum Dolor</b><br>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco
	</div>
	<div class="col-md-4">
		<b>Cheapest and Best</b><br>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt
	</div>
</div>

<div class="location" id="contact">
	<h2>Our Location</h2>
	Koteshwor-35, Madhevstan<br>
	Kathmandu, Nepal<br>
	Phone : 9840061926<br>
	Email : sanjeevdulal154@gmail.com
</div>
<div class="map">
	<!-- <img src="img/map.png" class="img-responsive"> -->
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA_ATLMi5nKo6u4AvWX_yXpbptfff97d9o'></script><div style='overflow:hidden;height:440px;width:100%;'><div id='gmap_canvas' style='height:440px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="https://privacypolicygenerator.info">privacy policy generator</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(27.675896948784082,85.34141768885503),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(27.675896948784082,85.34141768885503)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>koteswor, kathmandu<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>

<?php include("inc/footer.php")?>