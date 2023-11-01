<?php 
$errors = '';
//<-----Put Your email address here.
$myemail = 'projects.vikasn@gmail.com,info@softflame.in';
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['mobile']) ||
   empty($_POST['enquiry']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email'];
$mobile = $_POST['mobile']; 
$enquiry = $_POST['enquiry']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Enquiry from: $name";
	$email_body = "You have received a new Enquiry message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Mobile: $mobile \n Message: $enquiry"; 
	
	$headers = "From: $name\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: enquiry.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Enquiry form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>