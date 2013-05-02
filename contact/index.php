<?php
$title = 'Contact';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<div class="sixteen columns">
<h2>Contact</h2>
</div>

<div class="eight columns">
	<p style="display: block; width: 100%; height: 600px; max-height: 100%; background: #888;">picture!</p>
</div>

<div class="eight columns">
	<p>I would love to hear from you! Feel free to use the form below, or you can send me an email directly at
	<script type="text/javascript" language="javascript">
<!--
// Email obfuscator script 2.1 by Tim Williams, University of Arizona
// Random encryption key feature by Andrew Moulden, Site Engineering Ltd
// This code is freeware provided these four comment lines remain intact
// A wizard to generate this code is at http://www.jottings.com/obfuscator/
{ coded = "frarB@frarBDkPBduBmdmParuBR.Mmo"
  key = "eDQy2Y8Upa3fi6Ov4bjKZPMoVdhINXLCw5RAqTnur0skH7lG1EF9gcmStBzxWJ"
  shift=coded.length
  link=""
  for (i=0; i<coded.length; i++) {
    if (key.indexOf(coded.charAt(i))==-1) {
      ltr = coded.charAt(i)
      link += (ltr)
    }
    else {     
      ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
      link += (key.charAt(ltr))
    }
  }
document.write("<a href='mailto:"+link+"'>"+link+"</a>")
}
//-->
</script><noscript>(Sorry, you need Javascript on to email me.)</noscript></p>

	<!--<script src="/javascript/livevalidation_standalone.compressed.js"></script>-->
	<div id="contact_form">
		<form name="contact_form" action="" method="">
			<ul>
				<li>
					<label for="name">Name:</label>
					<label for="name" class="form_error_message">Please enter your name</label>
					<input type="text" name="name" id="name" />
					<!--<script type="text/javascript">
						var name_input = new LiveValidation('name', { onlyOnSubmit: "true" });
						name_input.add( Validate.Presence );
					</script>-->
				</li>
				<li>
					<label for="email">Email:</label>
					<label for="email" class="form_error_message">Please enter a valid email address</label>
					<input type="email" name="email" id="email" />
					<!--<script type="text/javascript">
						var email_input = new LiveValidation('email', { onlyOnSubmit: "true" });
						email_input.add( Validate.Presence );
						email_input.add( Validate.Email );
					</script>-->
				</li>
				<li>
					<label for="message">Message:</label>
					<label for="message" class="form_error_message">Please enter a brief message</label>
					<textarea name="message" id="message" cols="40" rows="6"></textarea>
					<!--<script type="text/javascript">
						var message = new LiveValidation('message', { onlyOnSubmit: "true" });
						message.add( Validate.Presence );
					</script>-->
				</li>
				<li>
					<button type="submit" class="submit"> Send Message!</button>
				</li>
			</ul>
		</form>
	</div> <!-- contact_form -->
</div>

<?php
$script = '<script src="contact_form.js"></script>';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>