<?php	
	if(empty($_POST['input_508']) && strlen($_POST['input_508']) == 0 || empty($_POST['input_1011']) && strlen($_POST['input_1011']) == 0 || empty($_POST['textarea_1073']) && strlen($_POST['textarea_1073']) == 0)
	{
		return false;
	}
	
	$input_508 = $_POST['input_508'];
	$input_1011 = $_POST['input_1011'];
	$textarea_1073 = $_POST['textarea_1073'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from My Site2.";
	$email_body = "You have received a new message. \n\n".
				  "Input_508: $input_508 \nInput_1011: $input_1011 \nTextarea_1073: $textarea_1073 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_1011";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>