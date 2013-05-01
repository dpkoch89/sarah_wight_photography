$(document).ready(function(){
	$(".form_error_message").hide();
	// $("input#name").focus();
	
	$("button.submit").click(function(){
		// validate and process form here
		$(".form_error_message").hide();
		
		// validate name field
		var name = $("input#name").val();
		if (name == "")
		{
			$(".form_error_message[for='name']").show();
			$("input#name").focus();
			return false;
		}
		
		// validate email field
		var email = $("input#email").val();
		if (email == "" || !isValidEmail(email))
		{
			$(".form_error_message[for='email']").show();
			$("input#email").focus();
			return false;
		}
		
		// validate message field
		var message = $("textarea#message").val();
		if (message == "")
		{
			$(".form_error_message[for='message']").show();
			$("textarea#message").focus();
			return false;
		}
		
		// submit the form and display a success message
		$.ajax({
			type: "POST",
			url: "./submit_form.php",
			data: $("form[name='contact_form']").serialize(),
			success: function(data) {
				$("#contact_form").html(data);
			}
		});
		
		return false;
	});
	
	$("input#name").change(function() {
		$(".form_error_message[for='name']").hide();
	});
	
	$("input#email").change(function() {
		var email = $("input#email").val();
		if (isValidEmail(email))
		{
			$(".form_error_message[for='email']").hide();
		};
	});
	
	$("textarea#message").change(function() {
		$(".form_error_message[for='message']").hide();
	});
});

function isValidEmail(email)
{
	// regular expression from: http://www.regular-expressions.info/email.html
	var regex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	return regex.test(email);
}
