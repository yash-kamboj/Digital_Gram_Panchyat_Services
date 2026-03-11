<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email-from = 'yashkamboj1999@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                     "User Email: $visitor_email.\n".
                        "user Message: $message.\n";


    $to = "yash.kamboj.mca.2019@miet.ac.in";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor-email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");

?>