<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Sarah Wight Photography - Contact</title>
	<meta name="description" content="Sarah Wight Photography">
	<meta name="author" content="Daniel Koch">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="../stylesheets/base.css">
	<link rel="stylesheet" href="../stylesheets/skeleton.css">
	<link rel="stylesheet" href="../stylesheets/layout.css">
	<?php if (!empty($css)) echo $css . "\n"; ?>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
	
	<!-- Fonts
	================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="band navigation primary">
	<nav class="container primary">
		<div class="sixteen columns">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/portfolio/">Portfolio</a>
					<ul>
						<li><a href="#">Families</a></li>
						<li><a href="#">Seniors</a></li>
						<li><a href="/portfolio/engagements/">Engagements</a></li>
						<li><a href="#">Formals</a></li>
						<li><a href="#">Weddings</a></li>
						<li><a href="#">Dance</a></li>
					</ul>
				</li>
				<li><a href="#">Pricing</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Proofing</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Blog</a></li>
			</ul>
		</div>
	</nav> <!-- end container -->
</div> <!-- end primary navigation band -->

<div class="band header">
	<header class="container main">
		<div class="sixteen columns">
			<h1 class="logo"><a href="/">Sarah Wight Photography</a></h1>
		</div>
	</header> <!-- end container -->
</div> <!-- end header band -->

<div class="band navigation secondary">
	<nav class="container secondary">
		<div class="sixteen columns">
		</div>
	</nav> <!-- end container -->
</div> <!-- end secondary navigation -->

<div class="band content">
<div class="container">
<!-- end header -->

<div class="sixteen columns">
	<script src="../javascript/livevalidation_standalone.compressed.js"></script>
	<form action="" method="post" name="contact-form">
		<ul>
			<li>
				<label for="name">Name:</label>
				<input type="text" id="name" />
				<script type="text/javascript">
					var name_input = new LiveValidation('name');
					name_input.add( Validate.Presence );
				</script>
			</li>
			<li>
				<label for="email">Email:</label>
				<input type="text" id="email" />
				<script type="text/javascript">
					var email_input = new LiveValidation('email');
					email_input.add( Validate.Presence );
					email_input.add( Validate.Email, { onlyOnSubmit: "true" } );
				</script>
			</li>
			<li>
				<label for="message">Message:</label>
				<textarea id="message" cols="40" rows="6"></textarea>
				<script type="text/javascript">
					var message_textarea = new LiveValidation('message');
					message.add( Validate.Presence );
				</script>
			</li>
			<li>
				<button class="submit" type="submit">Submit Form</button>
			</li>
		</ul>
	</form>
</div>

<!-- begin footer -->
</div> <!-- end container -->
</div> <!-- end content band -->

<div class="band navigation footernav">
	<footer class="container">
		<nav class="footernav">
			<div class="sixteen columns">
			</div>
		</nav>
	</footer>	
</div>

<div class="band footer">
	<footer class="container">
		<div class="sixteen columns">
			<nav></nav>
			<p><small>All images &copy; 2012 Sarah Wight. <br />All rights reserved. </small></p>
		</div>
	</footer> <!-- end container -->
</div> <!-- end footer band -->

<!-- JS
================================================== -->
<!--<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<!-- chris coyier's little dropdown select
	http://css-tricks.com/convert-menu-to-dropdown/ -->
<script type="text/javascript">
	$(document).ready(function() {
		
		// build dropdown
		$("<select />").appendTo("nav.secondary div, nav.footernav div");
		
		// Create default option "Go to..."
		$("<option />", {
			"selected": "selected",
			"value"   : "",
			"text"    : "Go to..."
		}).appendTo("nav.secondary select, nav.footernav select");
		
		// Populate dropdown with menu items
		$("nav.primary li a").each(function() {
		    el = $(this);
		    var pre = el.parents("nav.primary ul").length > 1 ? "- " : "";
		    $("<option />", {
		        "value"   : el.attr("href"),
		        "text"    : pre + el.text()
		    }).appendTo("nav.secondary select, nav.footernav select");
		});
		
		// add the "Back to Top" link
		$('<p><a href="#top">Back to Top</a></p>').appendTo("nav.footernav");
		 
		// make the dropdown actually work
		$("nav select").change(function() {
		window.location = $(this).find("option:selected").val();
		});
	});
</script>

<!-- populate footer links -->
<script type="text/javascript">
	$(document).ready(function() {
		// build paragraph
		$("<p />").appendTo(".footer nav");
		
		// populate the paragraph
		$first = true;
		$("nav.primary div > ul > li > a").each(function() {
			var el = $(this);
			
			if (!$first) { $(".footer nav p").append(" | "); }
			else { $first = false; }
			
			$("<a />", {
				"href"	: el.attr("href"),
				"text"	: el.text()
			}).appendTo(".footer nav p");
		});
		
		// add the "Back to Top" link
		$('<br /><a href="#top">Back to Top</a>').appendTo(".footer nav p");
	});
</script>

<!-- additional (page specific) scripts, if any -->
<?php if (!empty($script)) echo $script . "\n"; ?>

<!-- End Document
================================================== -->
</body>
</html>