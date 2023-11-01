<?php
include 'db_config.php';
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "projects.vikasn@gmail.com";
	$email_subject = "New Inquiry from Website";
 
    function died($error) { 
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['mobile']) ||
        !isset($_POST['email']) ||
        !isset($_POST['enquiry'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $phone = $_POST['mobile']; // required
    $email = $_POST['email']; // required   
    $message = $_POST['enquiry']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match('/^[0-9]{10}+$/',$phone)) {
    $error_message .= 'The Phone Number you entered does not appear to be valid.<br />';
  }
 
  if(strlen($message) < 2) {
    $error_message .= 'The message you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
	$email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "mobile: ".clean_string($phone)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "mobile: ".clean_string($message)."\n";

    $headers="";
    $headers.= 'From: '.$email."\r\n".
	
// create email headers
$headers.= 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
	
@mail($email_to, $email_subject, $email_message, $headers);  






  $name = $_POST['name']; // required
  $phone = $_POST['mobile']; // required
  $email = $_POST['email']; // required   
  $message = $_POST['enquiry']; // required
	 $sql = "INSERT INTO enquirymails (name, mobile_no, email, message)
	 VALUES ('$name','$phone','$email','$message')";
	 if (mysqli_query($conn, $sql)) {
		echo "Mail send Sucessfully";
	 } else {
		echo "Error: " . $sql . "
        " . mysqli_error($conn);
        	 }
        	 mysqli_close($conn);

?>
 
<!-- include your own success html here -->
 
<h2>Thank you for contacting us. We will be in touch with you very soon.</h2>


<script type="text/javascript">
(function(){
   setTimeout(function(){
     window.location="http://www.softflame.in/";
   },3000); /* 1000 = 1 second*/
})();
</script>

<?php
 
}
?>