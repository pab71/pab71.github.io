<?php	
	if(empty($_POST['undefined_1163']) && strlen($_POST['undefined_1163']) == 0)
	{
		return false;
	}
	
	$undefined_1163 = $_POST['undefined_1163'];
	
	$to = 'yourmail@test.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from My Site2.";
	$email_body = "You have received a new message. \n\n".
				  "Undefined_1163: $undefined_1163 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: yourmail@test.com\n";
	$headers .= "Reply-To: $undefined_1163";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>