<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    $Whereto = $_POST[ 'Whereto' ];
    $from = $_POST[ 'from' ];
    $place = $_POST[ 'place' ];

    // You can perform additional validation here

    // Send email ( example using mail function )
    $to = 'alexrohitgupta@gmail.com';
    // Replace with your email address
    $subject = 'Contact Form Submission';
    $email_body = "Where to: $Whereto\nFrom: $from\nPlace: $place";

    // Check if mail sent successfully
    if ( mail( $to, $subject, $email_body ) ) {

        //redirect
        header( 'Location:thankyou.html' );
        // echo 'Thank you for your message! We will get back to you soon.';
    } else {
        echo 'Oops! Something went wrong. Please try again later.';
    }
}

?>>