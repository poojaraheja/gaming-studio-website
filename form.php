<?php 
$errors = '';
$myemail = 'tusshartyagi4@gmail.com';//<-----Put Your email address here.

$name = $_POST['name']; 
$email = $_POST['email']; 
$requirement = $_POST['message'];
$country = $_POST['code']; 
$phone = $_POST['phone'];

// if (!preg_match(
// "/^[_a-z0-9-]+(\.[_a-z0-9-]+)@[a-z0-9-]+(\.[a-z0-9-]+)(\.[a-z]{2,3})$/i", 
// $email_address))
// {
//    $errors .= "\n Error: Invalid email address";
// }

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n  Name: $name \n Email: $email \n Requirement: $requirement \n Country: $country \n Phone: $phone"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	echo("<script>alert('Thank You For Contacting Us , Our team Will Contact You Soon'); location.href='./index.php';</script>");
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>