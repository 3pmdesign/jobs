<?php	
	if(empty($_POST['name_15817']) && strlen($_POST['name_15817']) == 0 || empty($_POST['email_15817']) && strlen($_POST['email_15817']) == 0 || empty($_POST['message_15817']) && strlen($_POST['message_15817']) == 0)
	{
		return false;
	}
	
	$name_15817 = $_POST['name_15817'];
	$email_15817 = $_POST['email_15817'];
	$message_15817 = $_POST['message_15817'];
	
	$to = '3pm.3pm.lab@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_15817: $name_15817 \nEmail_15817: $email_15817 \nMessage_15817: $message_15817 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: 3pm.3pm.lab@gmail.com\n";
	$headers .= "Reply-To: $email_15817";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>