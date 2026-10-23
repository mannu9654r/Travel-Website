<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    $name = $_POST[ 'name' ];
    $lastname = $_POST[ 'lname' ];
    $email = $_POST[ 'email' ];
    $phoneno = $_POST[ 'phoneno' ];
    $message = $_POST[ 'message' ];

    // You can perform additional validation here

    // Send email ( example using mail function )
    $to = 'alexrohitgupta@gmail.com';
    // Replace with your email address
    $subject = 'Contact Form Submission';
    $email_body = "Name: $name\nLast Name: $lastname\nEmail: $email\nPhoneNo: $phoneno\nMessage: $message";

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