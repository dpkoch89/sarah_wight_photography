
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

<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37802778-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- End Document
================================================== -->
</body>
</html>
