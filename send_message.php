<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Validate inputs (basic validation, you can add more as needed)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        // Handle empty fields
        echo "All fields are required. Please fill out the form.";
        exit;
    }

    // Email address where you want to receive the messages
    $to = "ajayjofficial@gmail.com";

    // Email content
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from $name ($email):\n\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\nReply-To: $email";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Redirect to the contact form if accessed directly
    header("Location: index.html");
    exit;
}
?>
