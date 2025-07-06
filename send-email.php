<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "info@katieskouture.com";
  $subject = "New Message from Katie’s Kouture Contact Form";

  $name = htmlspecialchars($_POST["name"]);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $form_subject = htmlspecialchars($_POST["subject"]);
  $message = htmlspecialchars($_POST["message"]);

  $full_message = "Name: $name\nEmail: $email\nSubject: $form_subject\n\nMessage:\n$message";

  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $full_message, $headers)) {
    echo "Thank you! Your message has been sent.";
  } else {
    echo "Sorry, something went wrong. Please try again.";
  }
}
?>
