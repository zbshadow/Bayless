<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_fromm = 'bricebayless@gmail.com';

    $email_subject = "New Form Submission from bricebayless.com";

    $email_body = "User Name: $name. \n".
                    "User Email: $visitor_email. \n".
                        "User Message: $message. \n";

    $to = "bricebayless@gmail.com";

    $headers = "From: $email_from \r \n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($tp,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>