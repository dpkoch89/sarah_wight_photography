<?php
$title = 'Proofing';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<div class="sixteen columns">
	<script src="/javascript/livevalidation_standalone.compressed.js"></script>
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