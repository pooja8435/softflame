<?php 

if(isset($_POST['submit'])){
    $to = "projects.vikasn@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $mobile = $_POST['mobile'];    
    $subject = "Enquiry mail on Softflame";
    
    $message = $first_name . " " . "Email Id:" . $from  . "Mobile Number : " . $mobile . " wrote the following:" . "\n\n" . $_POST['message'];
    

    $headers = "From:" . $from;
    
   echo mail($to,$subject,$message,$headers);
    
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    header('Location: http://softflame.in/enquiry1.html');
    }
?>

<!--chaitanyapardhi3@gmail.com-->