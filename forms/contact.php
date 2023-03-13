<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = "teddyab729@gmail.com";
  $subject = "New form submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  if (mail($to, $subject, $body, $headers)) {
    echo "The email was sent successfully.";
  } else {
    echo "The email could not be sent.";
  }
}
?>