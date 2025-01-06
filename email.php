<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $country = htmlspecialchars($_POST['country']);
    $subject = htmlspecialchars($_POST['subject']);

    // Email details
    $to = "nureenamira453@gmail.com";  // Replace with your email
    $subjectLine = "New Message from $firstname $lastname";
    $message = "
    First Name: $firstname\n
    Last Name: $lastname\n
    Country: $country\n
    Message:\n$subject
    ";
    $headers = "From: no-reply@example.com";  // Replace with a valid sender email

    // Send email
    if (mail($to, $subjectLine, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
