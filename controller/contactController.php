<?php

/****************************
* ----- CONTACT PAGE --------
****************************/

function contactPage( $post ) {

    $email = $post['email'];
    $message = $post['message'];

    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email))
    {
        $error_msg = "Format de mail non valide.";
    }
    elseif (empty($message))
    {
        $error_msg = "Saisissez votre message.";
    }
    else
    {
        sendMail($email, $message);
        $success_msg = "Message envoyé à l'équipé CodFlix avec succès.";
    }

    require('view/contactView.php');
}

function sendMail($mail, $message ) {
    $subject = "Réponse à votre message";
    $header = 'From: ' + $mail + '.'; // Email header
    // Sending email is not working
    // mail('contact@codflix.com​', $subject, $message, $header); 
}