<?php

error_reporting(E_ALL);

$has_errors = FALSE;
$errors = "<ul>";

// validate name field
if ($_POST['name'] != "") {
	$_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	if ($_POST['name'] == "") {
		$has_errors = TRUE;
		$errors .= "\n\t<li>Please enter a valid name.</li>";
	}
} else {
	$has_errors = TRUE;
	$errors .= "\n\t<li>Please enter your name.</li>";
}

// validate email field
if ($_POST['email'] != "") {
	$_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$has_errors = TRUE;
		;
		$errors .= "\n\t<li>\"" . $email = $_POST['email'] . "\" is not a valid email address. Please enter a valid email address.</li>";
	}
} else {
	$has_errors = TRUE;
	$errors .= "\n\t<li>Please enter your email address.</li>";	
}

// validate message field
if ($_POST['message'] != "") {
	$_POST['message'] = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
	if ($_POST['message'] == "") {
		$has_errors = TRUE;
		$errors .= "\n\t<li>Please enter a message to send.</li>";
	}
} else {
	$has_errors = TRUE;
	$errors .= "\n\t<li>Please enter a message to send.</li>";
}

$errors .= "\n</ul>";

// process form and echo result
if (!$has_errors) {
	$mail_to = 'sarahwightphotography@gmail.com';
	$subject = 'Contact form submission';
	$headers = 'From: "' . $_POST['name'] . '" <noreply@sarahwightphotography.com>';
	$headers .= "\r\nReply-To: " . $_POST['email'];
	//$headers .= "\r\nContent-type: text/html";
	$message = "[Name]: " . $_POST['name'] . "\n";
	$message .= "[Email]: " . $_POST['email'] . "\n";
	$message .= "\n" . $_POST['message'];
	
	if(mail($mail_to, $subject, $message, $headers)) {
		echo "<div class='form_success'><p>Message Sent! Thank you for your interest; we will get back to you as soon as possible.</p></div>";
	} else {
		echo "<div class='form_failure'><p>We're sorry, an error was encountered while attempting to send your message. Please refresh this page to try again.</p></div>";
	}
} else {
	echo "<div class='form_failure'><p>We're sorry, there was an error processing your form:</p>\n$errors\n<p>Please refresh this page to try again.</p></div>";
}

?>