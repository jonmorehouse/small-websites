<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$contact_message_unedited = "\t\tFrom: " . $first_name . " " . $last_name . " Email: " . $email_address . "\n\n\t\tMessage: " . $message;
$contact_message = wordwrap($contact_message_unedited, 70);

mail('hello@carouselconsulting.com', 'Carousel Consulting Contact', $contact_message);

header('Location: contact.html');
?>