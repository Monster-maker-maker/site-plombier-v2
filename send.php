<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);
  $to = "contact@monsite.com";
  $subject = "Message depuis le site";
  $body = "Nom: $name\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email";
  if (mail($to, $subject, $body, $headers)) {
    echo "Message envoyé !";
  } else {
    echo "Erreur d'envoi.";
  }
}
?>