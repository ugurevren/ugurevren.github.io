<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $email;
    $to = "ugurevrencamalan@gmail.com";
    $subject = $subject;
    $message = $message;
    $headers = "From:" . $name;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>