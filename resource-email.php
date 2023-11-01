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
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$file = "";

    $body = "
     <html>
       <head>
         <title>your title</title>
       </head>
       <body>
         
         <p> First Name:$name</p>
         <p>Last Name:$surname</p>
         <p>Email ID: $email </p>
          <p>Contact: $phone </p>
          
          <p>Message: $message </p>
       </body>
     </html>";


 $mail = new PHPMailer;

        $mail->setFrom($email, $name);
       // $mail->addAddress($email, $name);
		    $mail->addAddress('hr@softflame.in', 'Softflame Solutions Pvt. Ltd.');
        $mail->Subject = 'Hire Resource ';
		    $mail->IsHTML(true); 
        $mail->Body = $body;
     //   $mail->addAttachment($file, $file);
       $mail->send();
        echo  "<h2>Thank you for contacting us. We will be in touch with you very soon.</h2>";
        

        //mail send to database//


        $name = $_POST['name']." ".$_POST['surname'];        
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
     
        $sql = "INSERT INTO hireresourcemails  (name, mobile_no, email, message)
        VALUES ('$name','$phone','$email','$message')";
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
                window.location="http://www.softflame.in/";
              },3000); /* 1000 = 1 second*/
            })();
        </script>
 

			













