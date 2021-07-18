<?php
// to multiple users

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "hello@hzxr.xyz";
    $to = "aiehazari@gmail.com";
    $to2 = "syaffiqhazari@ainmedicare.com.my";
    $subject = "Multiple senders";
    $message = "commencing gmail test";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers) && mail($to2,$subject,$message, $headers)) {
		echo "The email message was sent.";
    } else {
    	echo "The email message was not sent.";
    }

?>