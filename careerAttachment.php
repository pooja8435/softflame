<?php
require 'PHPMailer/class.phpmailer.php';
include 'db_config.php'; 


function clean_string($string) {
        $string = trim($string);
        $string = utf8_decode($string);
        $string = str_replace("#", "&#35", $string); $string = str_replace("%", "&#37", $string);

        if (mysql_real_escape_string($string)) {
            $string = mysql_real_escape_string($string);
        }

        if (get_magic_quotes_gpc()) {
            $string = stripslashes($string);
        }

        return htmlentities($string);
    }


$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$skills = $_POST['skills'];
$message = $_POST['message'];
$file = "";

if(isset($_FILES['attachment'])){
      $errors= array();
      $file_name = $_FILES['attachment']['name'];
      $file_size =$_FILES['attachment']['size'];
      $file_tmp =$_FILES['attachment']['tmp_name'];
      $file_type=$_FILES['attachment']['type'];
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
	  
      if(($errors)> 0){
         move_uploaded_file($file_tmp, "uploads/".$file_name);
         $file = "uploads/".$file_name;
      }
      
   } 
    

    // $body .= "First Name: ".clean_string($name)."\n";
    // $body .= "Date Of Birth: ".clean_string($birthdate)."\n";
    // $body .= "Phone Number: ".clean_string($mobile)."\n";
    // $body .= "Email ID: ".clean_string($email)."\n";
    // $body .= "Address: ".clean_string($address)."\n";
    // $body .= "Skills: ".clean_string($skills)."\n";
    // $body .= "Message: ".clean_string($message)."\n";
    
    $body = "
     <html>
       <head>
         <title>your title</title>
       </head>
       <body>
         <p>First Name:$name</p>
         <p>Date Of Birth:$birthdate</p>
         <p>Phone Numbe: $mobile </p>
         <p>Email ID: $email </p>
          <p>Address: $address </p>
          <p>Skills: $skills </p>
          <p>Message: $message </p>
       </body>
     </html>";


        $mail = new PHPMailer;
        $mail = new PHPMailer;
        $mail->setFrom($email, $name);
       // $mail->addAddress($email, $name);
		    $mail->addAddress('hr@softflame.in', 'Softflame Solutions Pvt. Ltd.');
        $mail->Subject = 'Job Application On softflame';
	    	$mail->IsHTML(true); 
        $mail->Body = $body;
        $mail->addAttachment($file, $file);
       $mail->send();
      echo  "<h2>Thank you for contacting us. We will be in touch with you very soon.</h2>";
      


      $name = $_POST['name'];
      $birthdate = $_POST['birthdate'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $skills = $_POST['skills'];
      $message = $_POST['message'];
      $file_name = $file_name;
      $sql = "INSERT INTO careeermails  (name, mobile_no, dob, email, permanent_address, residential_address, skills, file_name)
      VALUES ('$name','$mobile','$birthdate','$email','$address','$message','$skills','$file_name')";
      if (mysqli_query($conn, $sql)) {
        echo "Mail send Sucessfully";
      } else {
        echo "Error: " . $sql . "
    " . mysqli_error($conn);
      }
      mysqli_close($conn);

	 ?>
		
		<script type="text/javascript">
(function(){
   setTimeout(function(){   
     window.location="career.php";
   },2000); /* 1000 = 1 second*/
})();
</script>
			













