<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'biuro@smileflow.pl';

    $email_subject = "Email z pianoincracow.pl";

    $email_body = "User Name: $name.\n".
                    "user Email: $visitor_email.\n".
                    "User Message: $message.\n";

    $to = "biuro@smileflow.pl";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

    ?> 