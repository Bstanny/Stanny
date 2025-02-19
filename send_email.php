<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "bartholomeeusen18@gmail.com";
    $subject = "Contact Formulier";
    $name = htmlspecialchars($_POST['naam']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['bericht']);
    $headers = "From: " . $email;

    $fullMessage = "Naam: " . $name . "\n";
    $fullMessage .= "E-mail: " . $email . "\n";
    $fullMessage .= "Bericht:\n" . $message;

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "E-mail is verzonden.";
    } else {
        echo "Er is een fout opgetreden bij het verzenden van de e-mail.";
    }
}
?>
