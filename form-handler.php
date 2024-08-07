<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['user-name']);
    $age = htmlspecialchars($_POST['user-age']);
    $email = htmlspecialchars($_POST['user-email']);

    $to = "shambhavisinha2435@gmail.com";
    $subject = "new coding crew signup!";
    $message = "Name: $name\nAge: $age\nEmail: $email";
    $headers = "From: shambhavisinha2435@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "thank you for signing up to our leicester coding crew! if you didn't sign up, you can safely ignore this email.";
    } else {
        echo "There was a problem sending your sign up. Please try again.";
    }
}
?>
