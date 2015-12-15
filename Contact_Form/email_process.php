<?php

$subject = $_POST['txt_subj'];
$message = $_POST['txt_msg'];
$header = $_POST['txt_email'];
$to = 'jgmanuyag@gmail.com';

mail($to, $subject, $message, 'From: '. $header);

echo "Your message has been sent!";

?>