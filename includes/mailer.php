<?php

    $visitor_name= $_POST['visitorName'];
    $visitor_email= $_POST['visitorEmail'];
    $visitor_phone=$_POST['visitorPhone'];
    $visitor_subject=$_POST['visitorSubject'];
    $visitor_message =$_POST['visitorMessage'];

    $email_from = 'info@seasonalshop.in';
    $email_subject = "New Enquiry";
    $email_body= "Name : $visitor_name.\n".
                        "User_Email :- $visitor_email.\n".
                            "User Message: $visitor_message.\n";

    $mailTo = "mail@krantesh.com";

    $headers = "From: ".$visitor_email;

    mail($mailTo, $email_subject, $email_body, $headers);

    header("Location: contact.php?sendsuccessfullly");
?>