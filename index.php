<?php 
$script = '<!-- slider javascript -->
<script src="/javascript/jquery.flexslider-min.js"></script>
<script src="/javascript/slider.js"></script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
		
<div class="sixteen columns">
	<div class="flexslider">
		<ul class="slides">
			<li><figure><img src="slider/Engagement.jpg" alt="" /></figure></li>
			<li><figure><img src="slider/Family.jpg" alt="" /></figure></li>
			<li><figure><img src="slider/Engagements.jpg" alt="" /></figure></li>
			<li><figure><img src="slider/Roommates.jpg" alt="" /></figure></li>
		</ul> <!-- end slides -->
	</div> <!-- end flexslider -->
</div>

<div class="ten columns">
	<h3>Welcome!</h3>
	<p>My name is Sarah Wight, and I am a professional portrait, wedding, and commercial photographer working and living in the Utah Valley and Salt Lake Valley areas.  I have the experience and skill it takes to create modern and fresh photographs of you and of your most important events.  My style is one of simplicity and excellence, and will never go out of style.  Please take a few moments to look around, and I hope that I can be a part of helping you capture your most important memories! (sorry it's so cheesy)</p>
</div>

<div class="six columns">
	<h3>First time here?</h3>
	<p>Not sure where to begin? Click one of the links below to get started!</p>
	<ul class="button-links">
		<li><a class="button-link" href="/portfolio/">Portfolio</a></li>
		<li><a class="button-link" href="#">Pricing</a></li>
		<li><a class="button-link" href="#">Contact</a></li>
	</ul>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>