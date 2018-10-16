<?php 
    $fname = $_POST['name'];
    $lname = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "anthonyreininger@mail.weber.edu";
    $subject = "Contact From Alliance";
    $mailheader = "From: $email \r\n";
    $phone = $_POST['phone'];
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
?>