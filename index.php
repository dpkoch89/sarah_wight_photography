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
	<p>I'm a professional senior, wedding, and model photographer based in Northern Utah. I believe it's my job to create a beautiful, timeless representation of you that you can look back on for the rest of your life. I absolutely love what I do, and I look forward to working with you!</p>
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